<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    

    public function phoneSubmit(Request $request)
    {
        $phoneNo = $request->input('phone');
        

        $SendApi='http://137.184.145.124:9003/ae/alt_eti-GameTerrain/api?network_key=u6naOdET0J&msisdn='.$phoneNo.'&method=sendOtp';


        try {
            $response = Http::get($SendApi);          
            $statusCode = $response->status();  // HTTP status code
            $responseData = $response->json();   // Parsed JSON response   
            
            //  dd($response->json()['response'].'              '  .$response->json()['reqid']);
             session(['data' => $responseData]);
             session(['phone'=>$phoneNo]);

             return view('phone', ['success' => $responseData]);


        } catch (\Exception $e) {         
            return view('phone', ['error' => 'Error fetching API data.']);
        }


    }


    

    public function pinSubmit(Request $request)
    {
        $pinNo = $request->input('pin');
        $data = session('data');
        $phoneNo=session('phone');
        //  dd($data['response'].'      '.$reqId= $data['reqid'].'       '.$phoneNo);
       
           
        
        
       
        $reqId= $data['reqid'];
        $PinApi='http://137.184.145.124:9003/ae/alt_eti-GameTerrain/api?network_key=u6naOdET0J&msisdn='.$phoneNo.'&method=verifyOtp&otp='.$pinNo.'&reqid='.$reqId;


        try {
            $response = Http::get($PinApi);          
            $statusCode = $response->status();  // HTTP status code
            $responseData = $response->json();   // Parsed JSON response   
            
            //  dd($response->json()['response'].'              '  .$response->json()['reqid']);
            //  dd($responseData);
             if($responseData['message']=='invalidpin' )
             {
                return view('phone', ['errorPin' => 'Wrong Pin Number']);
             }
             else{
                Session::forget('data');
                return view('success');
             }
             


        } catch (\Exception $e) {
           
            return view('phone', ['error' => 'Wrong Pin NUmber']);
        }

    }






    public function unSubscribe()
    {
        $phoneNo=session('phone');

        $unSubscribe='http://137.184.145.124:9003/lp/uae_et-GameTerrain/unsubscribe?msisdn='.$phoneNo;
        
        try {
            $response = Http::get($unSubscribe);          
           // $statusCode = $response->status();  // HTTP status code
           // $responseData = $response->json();   // Parsed JSON response   
            
            // dd($response);
           
            Session::forget('phone');
             return view('phone');


        } catch (\Exception $e) {
           
            return view('success', ['error' => 'Can not Unsubscribe']);
        }

    }
}
