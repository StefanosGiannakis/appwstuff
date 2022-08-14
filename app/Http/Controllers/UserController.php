<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function getAvailableScripts(int $user_id)
    {
        return 5;
    }
}
