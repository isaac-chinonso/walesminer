<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Deposit;
use App\Withdraw;

class PageController extends Controller
{
    public function admindashboard()
    {
        $data['activedeposit'] = Deposit::where('status', 1)->count();
        $data['pendingdeposit'] = Deposit::where('status', 0)->count();
        $data['pendingwithdrawal'] = Withdraw::where('status', 0)->count();
        $data['activewithdrawal'] = Withdraw::where('status', 1)->count();
        $data['totaldeposit'] = Deposit::sum('amount');
        $data['totalwithdrawal'] = Withdraw::sum('amount');
        return view('admin.admin_dashboard', $data);
    }

    public function pendingdeposit()
    {
        $data['pendingdeposit'] = Deposit::where('status', 0)->get();
        $data['totalpending'] = Deposit::where('status', 0)->sum('amount');
        return view('admin.pending_deposit', $data);
    }

    public function activedeposit()
    {
        $data['activedeposit'] = Deposit::where('status', 1)->get();
        $data['totalactive'] = Deposit::where('status', 1)->sum('amount');
        return view('admin.active_deposit', $data);
    }

    public function activatedeposit($id)
    {
            $user = Auth::user();

            Deposit::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }

    public function pendingwithrawal()
    {
        $data['pendingwithdrawal'] = Withdraw::where('status', 0)->get();
        $data['totalpending'] = Withdraw::where('status', 0)->sum('amount');
        return view('admin.pending_withdrawal', $data);
    }

    public function activewithdrawal()
    {
        $data['activewithdrawal'] = Withdraw::where('status', 1)->get();
        $data['totalactive'] = Withdraw::where('status', 1)->sum('amount');
        return view('admin.active_withdrawal', $data);
    }

    public function activatewithdrawal($id)
    {
            $user = Auth::user();

            Withdraw::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Paid Successfully');

         return back();
    }

    public function allusers(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://wales-miner.herokuapp.com/api/user/all",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $data= json_decode($response, true);

        $alluser = $data['users'];

        return view('admin.users', compact('alluser'));
    }
}
