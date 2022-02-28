@extends('layouts.app')
@section('title','test')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-header text-center">
        <h3>注册</h3>
      </div>
      <div class="card-body">
        <form action="{{route('post.store')}}" method="POST">
          @csrf
          <div class="row mb-3 mt-3 ">
            <label class="col-md-4 col-form-label text-md-end" for="email">
              email：
            </label>
            <div class="col-md-8">
              <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="enter email" id="email">
              @if($errors->has('email'))
              <span>
                <strong>
                  {{$errors->first('email')}}
                </strong>
              </span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end" for="password">
              password：
            </label>
            <div class="col-md-8">
              <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="enter password"
                id="password">
              @if($errors->has('password'))
                <span>
                  <strong>{{$errors->first('password')}}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="offset-md-4">
              <button class="btn btn-primary" type="submit">
                注册
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
