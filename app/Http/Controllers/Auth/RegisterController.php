<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Roles;
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


    protected function create(array $data)
    {
        $role_user = Roles::where('name', 'user')->first();
        $user=User::create([
            'name' => $data['name'],
            'last_name' => $data['subname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'plan_id'=>$data['planChoice']
        ]);
        Subscription::create([
            'plan_id'=>$data['planChoice'],
            'user_id'=>$user->id,
            'credit_card'=>$data['credit_number'],
            'credit_card_name'=>$data['credit_name'],
            'credit_card_lastname'=>$data['surnames'],
            'due_date'=>$data['date_venciment'],
            'cvv'=>$data['security_code'],
        ]);
        $user->roles()->attach($role_user);
        return $user;
    }
}

