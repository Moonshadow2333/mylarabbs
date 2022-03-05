<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Http\Requests\TopicRequest;
class TopicsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index(Topic $topic){
        return view('topics.index');
    }
    public function create(){
        return view('topics.create');
    }
    public function store(TopicRequest $request, Topic $topic){
        dd($request->all());
        session()->flash('success','帖子发布成功！');
        return redirect('topics');
    }
}
