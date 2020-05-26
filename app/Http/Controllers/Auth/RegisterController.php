<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\Cloner\Data;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(Request $request)
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

