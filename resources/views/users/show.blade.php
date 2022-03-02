@extends('layouts.app')
@section('title',$user->name)
@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
      <div class="card">
        <div class="card-body">
          <img class="card-img-top" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{$user->name}}">
          <h4 class="card-title mt-3">个人简介</h4>
          <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
          <hr>
          <h4 class="card-title">
            注册于
          </h4>
          <p class="card-text">
            2022年3月2号
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