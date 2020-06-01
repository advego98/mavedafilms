<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Roles;
use App\User;
use App\Subscription;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MavedaRegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'subname'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'planChoice' => ['required','integer','min:1'],
            'credit_number' => ['required', 'integer','min:16','max:19'],
            'credit_name' => ['required', 'string', 'max:255'],
            'surnames' => ['required', 'string', 'max:255'],
            'date_venciment' => ['required', 'string', 'min:5','max:5'],
            'security_code' => ['required', 'integer', 'min:3', 'max:3']
        ]);
    }

    protected function store(Request $request)
    {
        $role_user = Roles::where('name', 'user')->first();
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
        $user->roles()->attach($role_user);

        return redirect()->route('login')->content('');
    }
}
