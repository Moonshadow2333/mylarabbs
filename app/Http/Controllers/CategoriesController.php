<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;
use App\Models\User;
use App\Models\Link;
class CategoriesController extends Controller
{
    public function show(Request $request, Category $category, Topic $topic,User $user, Link $link){
        // dd(request()->route('order'));

        $topics = $topic->withOrder($request->order)->where('category_id',$category->id)->with('user','category')->paginate(20);
        // 活跃用户列表
        $active_users = $user->getActiveUsers();
        $links = $link->getAllCached();
        return view('topics.index',compact('topics','category','active_users','links'));
    }
}
