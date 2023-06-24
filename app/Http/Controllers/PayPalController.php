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
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => '75.00'
                        ]
                    ]
                ]
            ]);
        $response->throw();
        return $response->json();
    }

    public function capturePayment(Request $request) {
        $token = $this->generateAccessToken();
        $response = Http::withToken($token)->post(
            env('PAYPAL_API') . '/v2/checkout/orders/' .$request->input('orderID') . '/capture',
            ['json' => []]);
        $response->throw();
        return $response->json();
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
