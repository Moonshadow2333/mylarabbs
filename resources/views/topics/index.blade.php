@extends('layouts.app')
@section('title','话题列表')
@section('content')
  <div class="row">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#home">最后回复</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu1">最新发布</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          @include('topics/_topic_list',['topics'=>$topics])
        </div>
        <div class="mt-5">
          {!! $topics->appends(Request::except('page'))->render() !!}
        </div>
      </div>
    </div>

    <div class="col-md-3">
      @include('topics._sidebar')
    </div>
  </div>
@stop
