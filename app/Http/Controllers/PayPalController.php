<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PayPalController extends Controller
{

    //
    public function createOrder(Request $request) {
        $token = $this->generateAccessToken();
        $response = Http::withToken($token)->post(
            env('PAYPAL_API'). '/v2/checkout/orders', [
                'intent' => 'CAPTURE',
                'purchase_units' => [[
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => '75.00',
                            'breakdown' => [
                                'item_total' => [
                                    'value' => '75.00',
                                    'currency_code' => 'USD',
                                ]
                            ]
                        ],
                        'items' => [[
                            'category' => 'DIGITAL_GOODS',
                            'name' => 'Ensembles Class', // TODO Make this be actual class
                            'unit_amount' => [
                                'currency_code' => 'USD',
                                'value' => '75.00', // Don't hardcode the amount
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
            env('PAYPAL_API') . '/v2/checkout/orders/' .$request->input('orderID') . '/capture',
            ['json' => []]);
        if (!$payPalResponse->clientError()) {
            // Client errors have information about card processing failure, so
            // want to respond with normal JSON.
            $payPalResponse->throw();
        };
        return response()->json($payPalResponse->json(), $payPalResponse->status());
    }

    public function generateAccessToken() {

        $response = Http::withBasicAuth(env('PAYPAL_CLIENT_ID'), env('PAYPAL_CLIENT_SECRET'))
            ->asForm()
            ->post(env('PAYPAL_API') . '/v1/oauth2/token' , [
                'grant_type' => 'client_credentials'
            ]);
        $response->throw(); // Throw exeception if there is an error
        return $response->json()['access_token'];
    }
}
