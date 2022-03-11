@extends('layouts.app')
@section('title','创建话题')
@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          @if($topic->id)
          <h4>编辑话题</h4>
          @else
          <h4>创建话题</h4>
          @endif
        </div>
        <div class="card-body">
          @if($topic->id)
          <form action="{{route('topics.update')}}" method="POST">
          @method('put')
          @else
          <form action="{{route('topics.store')}}" method="POST">
          @endif
            @csrf
            @include('shared._errors')
            <div class="mt-3 mb-3 form-group">
              <label for="" class="form-label">
                Title
              </label>
              <input type="text" name="title" class="form-control" value="{{old('title',$topic->title)}}">
            </div>
            <div class="mb-3 form-group">
              <select class="form-control" name="category_id" required>
                <option value="" hidden disabled selected>
                  请选择分类
                </option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">
                    {{$category->name}}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 form-group">
              <label for="" class="form-label">
                Body
              </label>
              <textarea class="form-control" name="body" rows="3">
                {{old('body',$topic->body)}}
              </textarea>
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
