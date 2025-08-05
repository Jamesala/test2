@extends('layout')

@section('content')
    <div class="rulet_full full">
        <div class="rulet_title"><b><em>ВАША</em> ИГРА</b> <span>испытайте удачу</span></div>
        <div class="rulet_btn" id="button_buy"><span>ИСПЫТАТЬ УДАЧУ</span> <b>{{$case->price}} руб.</b></div>
        <div class="rulet_link"><a href="/price/" target="_blank">Что можно выиграть?</a></div>
        <div class="rulet">
            <ul>
                @foreach($items as $item)
                    <li><img src="{{$item->img}}" alt="{{$item->name}}"/></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="ceys_full full">
        <div class="ceys_title"><b>КЕЙСЫ</b></div>
        <div class="item_loop">
            @foreach ($cases as $case1)
            <div class="item" data-id="{{$case1->id}}">
                <div class="fon"></div>
                <div class="border"></div>
                <div class="item_rub"><b>{{$case1->price}}</b> руб</div>
                <div class="item_images">
                    <a href="/case/{{$case1->id}}" class="item_open">Открыть</a>
                    <img src="{{$case1->img}}" alt=""/>
                </div>
                <div class="item_text1 ell">{{$case1->name}}</div>
            </div>
            @endforeach
        </div>
    </div>
    <script type="text/javascript">
        var categoryRulet = "{{$case->name}}";
        var priceRulet = "{{$case->price}}";
    </script>
@endsection