@extends('layouts.app')
@section('title','编辑资料')
@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h4>编辑个人资料</h4>
        </div>
        <div class="card-body">
          @include('shared._errors')
          <form action="{{route('users.update',$user->id)}}" method="POST">
            @csrf
            @method('patch')
          <div class="form-group mb-3 mt-3">
            <label for="name" class="form-label">
              用户名：
            </label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name',$user->name)}}">
          </div>
          <div class="form-group mb-3">
            <label for="email" class="form-label">
              邮箱：
            </label>
            <input type="text" name="email" id="email" class="form-control" value="{{old('email',$user->email)}}">
          </div>
          <div class="form-group mb-3">
            <label for="introduction" class="form-label">
              个人简介：
            </label>
            <textarea class="form-control" id="introduction" rows="3" name="introduction">{{old('introduction',$user->introduction)}}</textarea>
          <div class="form-group mt-3 mb-3">
            <button type="submit" class="btn btn-primary">
              保存
            </button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
