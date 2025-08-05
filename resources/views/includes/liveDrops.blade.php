@foreach ($last as $item)
<li>
    <span class="slider_images"><img src="{{$item->item->img}}" alt=""></span>
    <span class="slider_login ell" title="{{$item->user->name}}">{{$item->user->name}}</span>
    <span class="slider_time ell" data-time="{{$item->created_at}}"></span>
</li>
@endforeach