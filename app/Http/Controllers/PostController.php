<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Handlers\ImageUploadHandler;
use App\Events\UserLogin;
use App\Models\Post;
use App\Events\BlogView;
class PostController extends Controller
{
    // 用于测试表单验证。
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        // 手动创建验证器
        $validator = Validator::make($request->all(),[
            'email' => ['required','email','max:255'],
            'password' => ['required']],
            [
                'email.required' => '您未输入邮箱地址！',
                'password.required' => '您未输入密码！！！'
        ]);
        /*
            如果校验失败，
            1. 你可以使用 withErrors 方法将错误信息闪存至 session 中。
            2. 使用该方法时，$errors 会自动与之后的视图共享，你可以很方便将其回显给用户。
            3. withErrors 方法接受验证器实例，MessageBag 或是 PHP 数组。
        */
        if($validator->fails()){
            return redirect('post/create')->withErrors($validator)->withInput();
        }
        // session()->flash('success','恭喜你，注册成功！');
        event(new UserLogin());
        return redirect('post/show');
    }
    public function show(){
        $post = Post::find(1);
        event(new BlogView($post));
        return view('post.show');
    }
}
