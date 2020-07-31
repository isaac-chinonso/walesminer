<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Session;
use App\Deposit;
use App\Withdraw;
use Alert;

class MemberController extends Controller
{
  public function postdeposit(Request $request)
  {
    $curl = curl_init();

    $data = array(
      'plan' => $request['plan'],
      'amount' => $request['amount']
    );

    $postdep = json_encode($data);

    $data = request()->session()->get('log');
    $bearer = 'Bearer ' . $data['token'];

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://wales-miner.herokuapp.com/api/transact/deposit",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $postdep,
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: $bearer"

      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $dep = json_decode($response, true);
    if ($dep['details']) {
      // Save Record into deposit DB
      $deposit = Input::all();
      $deposit = new Deposit();
      $deposit->user_id = $dep['details']['user'][0];
      $deposit->deposit_id = $dep['details']['_id'];
      $deposit->plan = request('plan');
      $deposit->amount = request('amount');
      $deposit->status = 0;
      $deposit->save();
      
      \Session::flash('Success_message', '✔ Withdrawal made successfully!, You would be contacted shortly');

      return redirect()->route('depositinstruct');

    }
  }

  public function makewithdrawal(Request $request)
  {
    $curl = curl_init();

    $data = array(
      'account' => $request['account'],
      'amount' => $request['amount']
    );

    $makewithdraw = json_encode($data);

    $data = request()->session()->get('log');
    $bearer = 'Bearer ' . $data['token'];

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://wales-miner.herokuapp.com/api/transact/withdraw",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $makewithdraw,
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: $bearer"

      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $with = json_decode($response, true);
    if ($with['details']) {
      // Save Record into withdrwawal DB
      $withdraw = Input::all();
      $withdraw = new Withdraw();
      $withdraw->user_id = $with['details']['user'][0];
      $withdraw->withdrawal_id = $with['details']['_id'];
      $withdraw->amount = request('amount');
      $withdraw->account = request('account');
      $withdraw->status = 0;
      $withdraw->save();

      \Session::flash('Success_message', '✔ Withdrawal made successfully!, You would be contacted shortly');

      return redirect()->route('withdrawal');
    }
  }
}
