<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PayController extends Controller
{
    function tokenCatcher(Request $request){
        $data_generated="data   ndejd";
        // var_dump($request);
        return response()->json(array('success' => true, 'data_generated'=>$request));

        // return Response::json( $request->toArray() );
    }
}