@if(count($topics))
  <ul class="list-unstyled">
    @foreach($topics as $topic)
    <li>
      <div class="m-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <a href="{{route('users.show',[$topic->user_id])}}">
              <img src="{{$topic->user->avatar}}" width="80" height="80"
                  alt="{{$topic->user->name}}">
            </a>
          </div>
          <div class="flex-grow-1 ms-3">
              <div>
                <a href="{{route('topics.show',[$topic->id])}}" title="{{$topic->title}}">
                  {{$topic->title}}
                </a>
                <a href="{{route('topics.show',[$topic->id])}}" class="float-end">
                  <span class="">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    {{ $topic->reply_count }}
                  </span>
                </a>
              </div>
              <small class="text-secondary">
                <a href="#" class="text-secondary" title="{{$topic->category->name}}">
                  <i class="far far-folder"></i>
                  {{$topic->category->name}}
                </a>
                <span> · </span>
                <a href="{{route('users.show',[$topic->user_id])}}" class="text-secondary" title="{{$topic->user->name}}">
                  <i class="far fa-user"></i>
                  {{$topic->user->name}}
                </a>
                <span> · </span>
                <i class="far fa-clock"></i>
                <span class="timeago" title="最后活跃于:{{$topic->updated_at}}">
                  {{$topic->updated_at->diffForHumans()}}
                </span>
              </small>
          </div>
        </div>
      </div>
    </li>
    @if(!$loop->last)
    <hr>
    @endif
    @endforeach
</ul>
@else
<div class="empty-block">
  暂无数据~_~
</div>
@endif
