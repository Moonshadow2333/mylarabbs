@extends('layouts.app')
@section('title',$user->name)
@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
      <div class="card">
        <div class="card-body">
          <img class="card-img-top" src="{{$user->avatar}}" alt="{{$user->name}}">
          <h4 class="card-title mt-3">个人简介</h4>
          <p class="card-text">
            {{$user->introduction}}
          </p>
          <hr>
          <h4 class="card-title">
            注册于
          </h4>
          <p class="card-text">
            <strong>
              {{$user->created_at->diffForHumans()}}
            </strong>
          </p>
        </div>

      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-body">
          <strong>{{$user->name}}</strong> - {{$user->email}}
        </div>
      </div>
      <hr>
      <div class="card">
        <div class="card-body">
          暂无数据~_~
        </div>
      </div>
    </div>
</div>
@stop
