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
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="#" class="nav-link active bg-transparent">
                Ta 的话题
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-transparent">
                Ta 的回复
              </a>
            </li>
          </ul>
          @include('users._topics',['topics'=>$user->topics()->recent()->paginate(5)])
        </div>
      </div>
    </div>
</div>
@stop
