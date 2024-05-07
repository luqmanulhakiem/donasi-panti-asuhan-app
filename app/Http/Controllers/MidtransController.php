<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Midtrans;

class MidtransController extends Controller
{
    public function buatTransaksi(Request $request) {
      $orderId = "ORDER-" . rand();
      // Gopay
        Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        Midtrans\Config::$clientKey = config('services.midtrans.clientKey');
        Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        $server_key = env('MIDTRANS_SERVER_KEY');
        $dataHash = '{
            "transaction_details": {
              "order_id": "'.$orderId.'",
              "gross_amount": '. $request->nominal .'
            },
            "item_details": [{
              "id": "ITEM1",
              "price": ' . $request->nominal .',
              "quantity": 1,
              "name": "Panti Asuhan Asyiyah",
              "brand": "DONASI",
              "category": "DONASI",
              "merchant_name": "Donasi Panti Asuhan"
            }],
            "customer_details": {
              "first_name": "'.$request->nama.'",
              "last_name": " ",
              "email": "'.$request->email.'",
              "phone": "'.$request->hp.'"
            },
            "enabled_payments": ["gopay"],
            "gopay": {
              "enable_callback": true,
            "callback_url": "http://gopay.com"
            },
            "user_id": "'.$request->nama . '-' . $request->hp.'"
          }';

        $caFilePath = storage_path('app/cacert.pem');
        $encodedData = json_decode($dataHash, true);
        $response = Midtrans\ApiRequestor::post(
            "https://api.midtrans.com/v1/payment-links",
            $server_key,
            $encodedData,
        );

       return redirect()->to($response->payment_url);
    }

    public function openUri(string $uri) {
      return redirect()->to($uri);
      
    }


    public function buatTransaksi2(Request $request) {
        
        $client = new Client([
            'verify' => false, // Matikan verifikasi SSL (Tidak disarankan untuk lingkungan produksi)
        ]);

        $profile = Konfigurasi::first();

        // https://api.midtrans.com
        // https://api.sandbox.midtrans.com

        // Payment Link
         $response = $client->request('POST', 'https://api.midtrans.com/v1/payment-links', [
            'body' => json_encode([
                    "transaction_details" => [
                        "order_id" => "ORDER-" . rand(),
                        "gross_amount" => 3000
                    ],
                    "item_details" => [[
                      "id" => "ITEM1",
                      "price" => 3000,
                      "quantity" => 1,
                      "name" => "Midtrans Bear",
                      "brand" => "Midtrans",
                      "category" => "Toys",
                      "merchant_name" => "Midtrans"
                    ]],
                    "customer_details" => [
                      "first_name" => "TEST",
                      "last_name" => "MIDTRANSER",
                      "email" => "test@midtrans.com",
                      "phone" => "+628123456"
                    ],
                    "enabled_payments" => ["gopay"],
                    "gopay" => [
                      "enable_callback" => true,
                    "callback_url" => "http =>//gopay.com"
                    ],
                    "user_id" => "testuser01"
                
            ]),
            'headers' => [
                'accept' => 'application/json',
                // 'authorization' => 'Basic U0ItTWlkLXNlcnZlci04RFQzOUU4Vy1ZSXY1Q25HaEJiWklqTkI6', //sandbox
                'authorization' => 'Basic TWlkLXNlcnZlci1ERFZFUVN0REkxLU9jRXJzZjR4T0VBMC06', //production
                'content-type' => 'application/json',
            ],
        ]);
        return $response->getBody();

        // QRIS
        // $response = $client->request('POST', 'https://api.midtrans.com/v2/charge', [
        //     'body' => json_encode([
        //         'payment_type' => 'qris',
        //         'transaction_details' => [
        //             'order_id' => 'order_id-' . uniqid(),
        //             'gross_amount' => $request->nominal,
        //         ],
        //         'qris' => [
        //             'acquirer' => 'gopay',
        //         ],
        //     ]),
        //     'headers' => [
        //         'accept' => 'application/json',
        //         // 'authorization' => 'Basic U0ItTWlkLXNlcnZlci04RFQzOUU4Vy1ZSXY1Q25HaEJiWklqTkI6', //sandbox
        //         'authorization' => 'Basic TWlkLXNlcnZlci1ERFZFUVN0REkxLU9jRXJzZjR4T0VBMC06', //production
        //         'content-type' => 'application/json',
        //     ],
        // ]);
        // return $response->getBody();

        $responseData = json_decode($response->getBody(), true);

        $qrCodeUrl = $responseData['actions'][0]['url'];


        // Tampilkan QR Code URL ke pengguna Anda
        return view('halaman.pembayaran', compact('qrCodeUrl', 'profile'));
        // return view('halaman.pembayaran')->with('qrCodeUrl', $qrCodeUrl);
        // return response()->json(['resp' => $response], 200);
        // return $response->getBody();
    }
}
