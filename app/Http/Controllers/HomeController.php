<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $user = User::where('id',$id)->first();
        $value =  $request->session()->put("user_id",$id);
       if($user->hasRole('admin')){
           return view('home');
       }else{
//           dd($user);
           return view('client_home');
       }

    }
    public function indexClient()
    {
        $user = Auth::user();
        try{
            if($user->hasRole('admin')){
                return view('home');
            }else{
                return view('client_dashboard');
            }
        }catch(\Exception $e){
            $value =  session("user_id");

        }

    }

    public function indexLogin(Request $request)
    {
        $user = Auth::user();
//        dd(is_null($user));
        try{
            if(is_null($user)){
                $value =  $request->session()->get("user_id");
//                dd($value);
                $user =  User::where('id',$value)->first();
//                dd($user);
                if($user->hasRole('admin')){
                    return view('home');
                }else{
                    return view('client_dashboard');
                }
            }else{
                if($user->hasRole('admin')){
                    return view('home');
                }else{
                    return view('client_dashboard');
                }
            }
        }catch(\Exception $e){

        }
    }

    public function getPrivacyPolicy(){
        return view('privacy_policy');
    }

    public function getTermsOfService(){
        return view('terms_of_service');
    }

    public function usersIndex(){
        return view('admin.users');
    }

    public function getUsers(){
        $menu = User::all();
        return Datatables::of($menu)->addColumn('action', function ($menu) {
            $re = '/user/' . $menu->id;
            $sh = '/user/show/' . $menu->id;
            $del = '/user/delete/' . $menu->id;
            return '<a href=' . $sh . '><i class="glyphicon glyphicon-eye-open"></i></a> <a href=' . $re . '><i class="glyphicon glyphicon-edit"></i></a> <a href=' . $del . '><i class="glyphicon glyphicon-trash"></i></a>';
        })
            ->make(true);
    }

    public function destroy($id)
    {
        //
        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->delete();
            DB::commit();
            return redirect('admin/users')->with("status", "User deleted successfully");
        } catch (\Exception $e) {
            return redirect('admin/users')->with("error", "Could not delete user, please contact system admin".$e);
        }
    }
}
