<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Deposit;
use App\Withdraw;
use Alert;

class PageController extends Controller
{

    public function dashboard()
    {
        $data = request()->session()->get('log');
        $capturerecord = $data['data'];
        $data['data'] = Deposit::where('user_id', $data['data']['user']['_id'])->where('status', 1)->sum('amount');
        return view('member.dashboard', compact('capturerecord'), $data);
    }

    public function makedeposit()
    {
        return view('member.make_deposit');
    }

    public function depositlist()
    {
        return view('member.deposit_list');
    }


    public function deposithistory()
    {
        $data = request()->session()->get('log');
        $capturerecord = $data['data'];
        $data['data'] = Deposit::where('user_id', $data['data']['user']['_id'])->get();

        return view('member.deposit_history', compact('capturerecord'), $data);
    }

    public function depositinstruct()
    {
        $data = request()->session()->get('log');
        $capturerecord = $data['data'];
        return view('member.instruct', compact('capturerecord'));
    }

    public function withdrawal()
    {
        $data = request()->session()->get('log');
        $capturerecord = $data['data'];
        $data['data'] = Deposit::where('user_id', $data['data']['user']['_id'])->where('status', 1)->sum('amount');
        return view('member.withdrawal', compact('capturerecord'), $data);
    }

    public function withdrawalhistory()
    {
        $data = request()->session()->get('log');
        $capturerecord = $data['data'];
        $data['data'] = Withdraw::where('user_id', $data['data']['user']['_id'])->get();
        return view('member.withdraw_history', compact('capturerecord'), $data);
    }
}
