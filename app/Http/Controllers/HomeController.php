<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getPosts($status = "")
    {
        $userQuery = User::query(); 
        if($status == "1")
        { 
            $userQuery->where('status', 1);
        } 
        if($status == "0"){
            $userQuery->where('status', 0);
        }
        
        return Datatables::of($userQuery)->make(true);                
        // $users = DB::table('users')->select('*');

        // return Datatables::of($users)
        // ->make(true);
    }
    public function destroy($id)
    {
        //$res=User::where('id',$id)->delete();
        $user = User::find($id)->delete();
   //     dd($user);
 //       $user->delete();           
        return redirect('home');                    
//        dd("destroy method called.!".$id);       
    }
}
