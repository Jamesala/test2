@extends('layout')

@section('content')
    <div class="ceys_full full">
        <div class="ceys_title"><b><a href="/">ГЛАВНАЯ</a> / </b>Что может выпасть?</div>
        <div class="item_loop2">
            @foreach ($items as $item)
                @if ($item->id !== 1)
                    <div class="items">
                        <div class="item_price">{{$item->sell_price}}</div>
                        <div class="item_images1">
                            <img src="{{$item->img}}" alt="{{$item->name}}"/>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a class="btn-price-for-main" href="/"><div class="main_btn"><span>ИСПЫТАТЬ УДАЧУ</span> <b>50 руб.</b></div></a>
    </div>
@endsection