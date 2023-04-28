<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //

    function index($school_id=null): array
    {
        $school1 = [
            ['1'=>"Max Ivanov",],
            ['2'=>"John Ivanov",],
            ['3'=>"Sara Ivanova",]
        ];
        $school2 = [
            ['1'=>"Mark Hudzovskyi",],
            ['2'=>"Ivan Ivanov",],
        ];
        $error = [
            'error'=>"Not found"
        ];
        if($school_id) {
            if($school_id==1) {
                return $school1;
            } else return $school2;
        } else return $error;
    }
}
