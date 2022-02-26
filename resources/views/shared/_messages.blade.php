@foreach(['success','info','warning','danger'] as $msg)
@if(session()->has($msg))
<div class="flash-message">
    <div class="alert alert-{{$msg}} alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{session()->get($msg)}}
  </div>
</div>
@endif
@endforeach
