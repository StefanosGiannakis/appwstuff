<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ViewController extends Controller
{
    public function RedirectToOtherPage(Request $request)
    {
        $missing=array('ena','dyo','tria');

        session(['missing' => $missing]);
        return response()->json(array(
            'redirectUrl' => route('finallyTheView')
        ));

        // header("Location: http://localhost:808/webstuff/public/finallyTheView");
        // return response()->json(array('success' => true, 'data_generated'=>$request));

        // return redirect()->action(
        //     'ViewController@finallyTheView', ['id' => 1]
        // ); 

        // return redirect()->route('finallyTheView');
        //return response()->json(array('success' => true, 'data_generated'=>$request));
    }
    public function finallyTheView()
    {
        return view('otherPage');
    }
}
