<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\Cloner\Data;

class MavedaRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function store(Request $request)
    {
        $user=User::create([
            'name' => $request->name,
            'last_name' => $request->subname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'plan_id'=>$request->planChoice
        ]);
        Subscription::create([
            'plan_id'=>$request->planChoice,
            'user_id'=>$user->id,
            'credit_card'=>$request->credit_number,
            'credit_card_name'=>$request->credit_name,
            'credit_card_lastname'=>$request->surnames,
            'due_date'=>$request->date_venciment,
            'cvv'=>$request->security_code,
        ]);
        return redirect()->route('home');
    }
}
