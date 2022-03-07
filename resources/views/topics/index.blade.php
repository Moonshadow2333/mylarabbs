@extends('layouts.app')
@section('title',isset($category) ? $category->name : '话题列表')
@section('content')
  <div class="row">
    <div class="col-md-9">
      @if(isset($category))
        <div class="alert alert-info" role="alert">
          {{$category->name}} : {{$category->description}}
        </div>
      @endif
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link  @if (request()->getUri() == url('/topics?order=default')) active @endif"  href="{{Request::url()}}?order=default">最后回复</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Request::url()}}?order=recent">最新发布</a>
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
