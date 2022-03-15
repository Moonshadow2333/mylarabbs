<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\SendMailToUser;
class TestsController extends Controller
{
    public function testQueue(){
        $user = User::find(1);
        dispatch(new SendMailToUser($user));
    }
}
