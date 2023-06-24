@extends('web.layouts.focused')

@section('title', 'Checkout')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <script src="https://www.paypal.com/sdk/js?client-id={{ $clientId }}&currency=USD"></script>
    <header class="mx-auto max-w-2xl md:text-center px-2 mb-4">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Checkout</h1>
        <p class="mt-6 text-lg">
            Registering {{ $student->firstname }} {{ $student->lastname }}.
            The total charge is: $75.00
            Please provide your payment information below.
        </p>
    </header>
    <article class="mx-auto max-w-2xl md:text-center px-2">
        <div id="loader" style="visibility:hidden">Please Wait</div>
        <div id="paypal-button-container"></div>
    </article>
    <script>
        paypal
          .Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: function () {
              document.getElementById('loader').style.visibility = 'visible';
              console.log('Create Order'); // Show a spinner
              return fetch("/paypal/create-order", {
                method: "post",
                headers: {
                  "Content-Type": "application/json",
                  'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
                },
                // use the "body" param to optionally pass additional order information
                // like product skus and quantities
                body: JSON.stringify({
                  cart: [
                    {
                      sku: "EDU{{ sprintf('%06d', $courseId) }}",
                      quantity: "1",
                    },
                  ],
                }),
              })
                .then((response) => response.json())
                .then((order) => {
                   console.log(`Order ID: ${order.id}`);
                   document.getElementById('loader').style.visibility = 'hidden';
                   return order.id;
                })
            },
            // Finalize the transaction after payer approval
            onApprove: function (data) {
              console.log('Capture Payment');

              return fetch("/paypal/capture-payment", {
                method: "post",
                headers: {
                  "Content-Type": "application/json",
                  'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
                },
                body: JSON.stringify({
                  orderID: data.orderID,
                }),
              })
                .then((response) => response.json())
                .then((orderData) => {
                  // Successful capture! For dev/demo purposes:
                  /* console.log(
                    "Capture result",
                    orderData,
                    JSON.stringify(orderData, null, 2)
                  ); */
                  const transaction = orderData.purchase_units[0].payments.captures[0];
                  const form = document.getElementById('registration_data');
                  form.querySelector('[name=transactionId]').value = transaction.id;
                  form.submit();
                });
            },
          })
          .render("#paypal-button-container");
      </script>
</section>
<form id="registration_data" action="{{ route('register-thankyou') }}" method="POST">
    @csrf
    <input type="hidden" name="transactionId" value="">
    <input type="hidden" name="courseId" value="{{ $courseId }}">
    <input type="hidden" name="studentId" value="{{ $student->id }}">
</form>
@stop
