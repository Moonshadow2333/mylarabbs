@foreach(['success','info','warning','danger'] as $msg)
@if(session()->has($msg))
<div class="flash-message">

    <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>{{$msg}}：</strong>
    {{session()->get($msg)}}
  </div>
</div>
@endif
@endforeach
