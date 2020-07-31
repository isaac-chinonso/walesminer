<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
  public function register(Request $request)
  {
    $curl = curl_init();

    $data = array(
      'name' => $request['name'],
      'username' => $request['username'],
      'email' => $request['email'],
      'password' => $request['password'],
      'passwordConfirm' => $request['passwordConfirm']
    );

    $register = json_encode($data);

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://wales-miner.herokuapp.com/api/auth/signup",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $register,
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    $re = json_decode($response, true);
    if ($re['message'] == "User created successfully!") {
      \Session::flash('Success_message', '✔ user registered successfully');

      return redirect()->route('dashboard');
    } else {
      \Session::flash('error_message', $re['message']);
      return redirect()->back();
    }
  }

  public function login(Request $request)
  {
    $curl = curl_init();

    $data = array(
      //'token' => $request['token'],
      'email' => $request['email'],
      'password' => $request['password']
    );

    $signin = json_encode($data);

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://wales-miner.herokuapp.com/api/auth/login",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $signin,
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $lo = json_decode($response, true);
    if ($lo['data']) {
      $lo = session()->put('log', $lo);

      \Session::flash('success_message', '✔ Login Successful.');

      return redirect()->route('dashboard');
    }
  }
}
