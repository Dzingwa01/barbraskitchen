<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use App\Role;
use Auth;


class FacebookController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback(Request $request)
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $create['name'] = $user->getName();
            $create['email'] = $user->getEmail();
            $create['facebook_id'] = $user->getId();
            $userModel = new User;
            $createdUser = $userModel->addNew($create);
            $value =  $request->session()->put("user_id",$createdUser->id);
//            $client = Role::where('name','client')->first();
//            $createdUser->attachRole($client);

            return redirect('/home/'.$createdUser->id);


        } catch (Exception $e) {

            dd($e->getMessage());

            return redirect('register/');


        }
    }
}
