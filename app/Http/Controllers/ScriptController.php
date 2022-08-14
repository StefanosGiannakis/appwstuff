<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Script;
use App\Http\Controllers\UserController;

class ScriptController extends Controller
{
    // maybe is vuln , check it later
    function savePopUp(Request $request){

        $title=!empty($request['pop_up_title']) ? $request['pop_up_title']:'___';
        $message=!empty($request['pop_up_message']) ? $request['pop_up_message']:'___';
        $user_id=$request['user_id'];

        if (!Auth::check())
            return 'not logged in';
            
        // Get User 
        $user= Auth::user();


        // Check how many available script slots user have
        $UserController= new UserController;
        $available_slots=$UserController->getAvailableScripts($user['id']); 
        
        //no -> return negative info to user
        if($available_slots<=0)                                 // Maybe return how many slots have in use
            return response()->json(array('success' => true, 'data'=>array('message'=>'not remaining script slots')));
            

            //yes -> 
            //Check if the same script already exists
            //pending

            //no -> create the script 
                $script= new Script;
                $script->title=$title;
                $script->body=$message;
                $script->website="my site.com";
                $script->script_id=1232;// generate a raandom number
                $script->user_id=$user['id'];
                $script->save();
            //yes -> do nothing


        return response()->json(array('success' => true, 'data'=>array(
            'title'=>$title,
            'message'=>$message,
            'user_id'=>$user_id
        )));

    }
}
