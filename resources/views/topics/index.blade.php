@extends('layouts.app')
@section('title','话题列表')
@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <span>话题列表</span>

           <a href="{{route('topics.create')}}" class="btn btn-success" role="button">
             create
           </a>
        </div>
        <div class="card-body">
          暂无数据~_~
        </div>
      </div>
    </div>
  </div>
@stop
