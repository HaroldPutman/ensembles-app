@extends('web.layouts.focused')

@section('title', 'Checkout')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <script src="https://www.paypal.com/sdk/js?client-id={{ $clientId }}&currency=USD"></script>
    <header class="mx-auto max-w-2xl md:text-center px-2 mb-4">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Checkout</h1>
        <p class="mt-6 text-lg">
            Please provide your payment information below.
        </p>
    </header>
    <article class="mx-auto max-w-2xl md:text-center px-2">
        <div id="paypal-button-container"></div>
    </article>
    <script>
        paypal
          .Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: function () {
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
                .then((order) => order.id);
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
                  console.log(
                    "Capture result",
                    orderData,
                    JSON.stringify(orderData, null, 2)
                  );
                  const transaction = orderData.purchase_units[0].payments.captures[0];
                  /*
                  alert(
                    "Transaction " +
                      transaction.status +
                      ": " +
                      transaction.id +
                      "\n\nSee console for all available details"
                  );
                  */
                  // When ready to go live, remove the alert and show a success message within this page. For example:
                  // var element = document.getElementById('paypal-button-container');
                  // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                  // Or go to another URL:  actions.redirect('thank_you.html');
                  actions.redirect(`/register/thankyou/${transaction.id}`);
                });
            },
          })
          .render("#paypal-button-container");
      </script>
</section>
@stop
