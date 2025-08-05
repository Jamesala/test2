@foreach ($items as $item)
    <li><img src="{{$item->img}}" alt="{{$item->name}}"/></li>
@endforeach