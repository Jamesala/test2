@extends('layout')

@section('content')
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <style>.prizget1 {
            padding-top: 6px;
            text-align: center;
            font-weight: bold;
            color: #776c45;
            font-size: 13px;
        }</style>
    <div class="ceys_full full">
        <div class="ceys_title"><b><a href="/" style="color: #46b588;">ГЛАВНАЯ</a> / <a href="/account"
                                                                                        style="color: #46b588;">ЛИЧНЫЙ
                    КАБИНЕТ</a> / </b>ВАШ ВЫИГРЫШ
        </div>
        <div class="item_loop">
            <div class="contentget">
                <div class="headerget">
                    <div class="left"><img src="{{$live->item->img}}" alt=""/></div>
                    <div class="right">
                        <span class="gamenameget">{{$live->item->name}}</span><br/>
                        <div class="gameitem">
                            <p class='getinfo'>КЛЮЧ АКТИВАЦИИ</p>
                            <p class='prizgetkey'>{{$live->key}}</p></div>
                    </div>
                </div>
                <hr color="#ededed" size="1px" class="getitemhr">
                <div class="footerget">
                    <p class='text1gets'>КАК АКТИВИРОВАТЬ КЛЮЧ?</p>
                    <div class='text2gets'>
                        <p> 1. Зайдите в клиент Steam на вашем компьютере.</p>
                        <p> 2. Перейдите во вкладку Библиотека.</p>
                        <p> 3. Нажмите Добавить игру.</p>
                        <p> 4. Выберите активировать через Steam и следуйте инструкции, появившейся в окне.</p>
                    </div>
                    <div class="label-feedback">Оставьте ваш отзыв:</div>
                </div>
  
  
			   <div id="vk_comments" class="feedback_container">

                    
                </div>

			   
				
            </div>
        </div>
@endsection
