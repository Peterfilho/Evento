<?php
/**
 * Created by PhpStorm.
 * User: erika
 * Date: 18/06/18
 * Time: 16:32
 */

namespace evento\Http\Controllers;


class DashboardController extends  Controller
{
    public  function  index(){
        return view('dashboard.index');
    }
}