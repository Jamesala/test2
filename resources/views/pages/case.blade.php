@extends('layout')

@section('content')
    <div class="ceys_full full" data-name="{{$case->name}}" data-id="{{$case->id}}">
        <div class="hidden">
            <div class="ceys_title">
                <a href="/"><b>ГЛАВНАЯ</b></a> <b>/</b> КЕЙС “{{$case->name}}”
            </div>
        </div>
        <div class="rulet_full full">
            <div class="rulet_title">
                <b><em>ВАША</em> ИГРА</b> <span>испытайте удачу</span>
            </div>
            <div class="rulet_btn" id="button_buy">
                <span>ИСПЫТАТЬ УДАЧУ</span> <b>{{$case->price}} руб.</b>
            </div>
            <div class="rulet">
                <ul>
                    @foreach($items as $item)
                        <li><img src="{{$item->img}}" alt="{{$item->name}}"/></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="ceys_title">Содержимое кейса</div>
        <div class="item_loop2">
            @foreach($demoItems as $item)
            <div class="items">
                @if($item->sell_price !== 0)
                <div class="item_price">{{$item->sell_price}}</div>
                @endif
                <div class="item_images1">
                    <img src="{{$item->img}}" alt="{{$item->name}}"/>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script type="text/javascript">
        var categoryRulet = "{{$case->name}}";
        var priceRulet = "{{$case->price}}";
    </script>
@endsection