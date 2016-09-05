<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Morilog\Jalali\jDate;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
      //  if(isset($data['roles']))
      //  print_r(serialize($data['roles']));die;
        /*  $b_month = (strlen($data['b_month'])<2)?"0".$data['b_month']: $data['b_month'];
          $b_day = (strlen($data['b_day'])<2)?"0".$data['b_day']:$data['b_day'];
          $jdate = $data['b_year']."-".$b_month."-".$b_day." 00:00:00";
          $birthday = \Morilog\Jalali\jDatetime::createDatetimeFromFormat('Y-m-d H:i:s', $jdate);*/

        $birthday = \Morilog\Jalali\jDateTime::toGregorian($data['b_year'], $data['b_month'], $data['b_day']); // [2016, 5, 7]
        $birthday = $birthday[0]."-".$birthday[1]."-".$birthday[2]." 00:00:00";
      //  print_r($data['roles']);die;

        $data['birthday'] = $birthday;
        $newsletter = (@$data['newsletter'])?$data['newsletter']:0;
        if(!isset($data['roles'])) $roles="";
        else
        $roles=serialize($data['roles']);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'newsletter' => $data['newsletter'],
            'birthday' => $data['birthday'],
            'roles' => $roles,
        ]);
    }
}
