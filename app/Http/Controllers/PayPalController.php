<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PayPalController extends Controller
{

    //
    public function createOrder(Request $request) {
        $token = $this->generateAccessToken();
        /**
         * Get JSON from request body
         */
        $requestBody = $request->json()->all();
        $cart = $requestBody['cart'];

        $response = Http::withToken($token)->post(
            config('paypal.apiUrl'). '/v2/checkout/orders', [
                'intent' => 'CAPTURE',
                'purchase_units' => [[
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => $cart[0]['price'],
                            'breakdown' => [
                                'item_total' => [
                                    'value' => $cart[0]['price'],
                                    'currency_code' => 'USD',
                                ]
                            ]
                        ],
                        'items' => [[
                            'category' => 'DIGITAL_GOODS',
                            'name' => $cart[0]['name'],
                            'unit_amount' => [
                                'currency_code' => 'USD',
                                'value' => $cart[0]['price'],
                            ],
                            'quantity' => 1,
                        ]]
                   ]],
                'application_context' => [
                    'shipping_preference' => 'NO_SHIPPING',
                ]

            ]);
        $response->throw();
        return $response->json();
    }

    public function capturePayment(Request $request) {
        $token = $this->generateAccessToken();
        $payPalResponse = Http::withToken($token)->post(
            config('paypal.apiUrl') . '/v2/checkout/orders/' .$request->input('orderID') . '/capture',
            ['json' => []]);
        if (!$payPalResponse->clientError()) {
            // Client errors have information about card processing failure, so
            // want to respond with normal JSON.
            $payPalResponse->throw();
        };
        return response()->json($payPalResponse->json(), $payPalResponse->status());
    }

    public function generateAccessToken() {

        $response = Http::withBasicAuth(config('paypal.clientId'), config('paypal.clientSecret'))
            ->asForm()
            ->post(config('paypal.apiUrl') . '/v1/oauth2/token' , [
                'grant_type' => 'client_credentials'
            ]);
        $response->throw(); // Throw exeception if there is an error
        return $response->json()['access_token'];
    }
}
