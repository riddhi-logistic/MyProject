<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Datatables;

use DB;


class DatatableController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function datatable()

    {

        return view('home');

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function getPosts()

    {

    	$users = DB::table('users')->select('*');

        return Datatables::of($users)

            ->make(true);

    }

}