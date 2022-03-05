@extends('layouts.app')
@section('title','创建话题')
@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h4>创建话题</h4>
        </div>
        <div class="card-body">
          <form action="{{route('topics.store')}}" method="POST">
            @csrf
            <div class="mt-3 mb-3 form-group">
              <label for="" class="form-label">
                Title
              </label>
              <input type="text" name="title" class="form-control" value="{{old('title')}}">
            </div>
            <div class="mb-3 form-group">
              <label for="" class="form-label">
                Body
              </label>
              <textarea class="form-control" name="body" rows="3">
                {{old('body')}}
              </textarea>
            </div>
            <div class="mb-3 form-group">
              <label for="" class="form-label">
                Category_id
              </label>
              <input type="text" name="category_id" class="form-control" value="{{old('category_id')}}">
            </div>
            <div class="mb-3 form-group">
              <button type="submit" class="btn btn-primary">
                提交
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
