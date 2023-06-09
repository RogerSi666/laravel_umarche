<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest() 
    {
        app()->bind('lifeCycleTest', function(){
            return 'ライフサイクルテスト';
        });
        dd(app());
    }
}
