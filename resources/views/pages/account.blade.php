@extends('layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/lk_style.css">
    <center>
        <div class="ceys_title"><b><a href="/" style=";">ГЛАВНАЯ</a> / </b>ЛИЧНЫЙ КАБИНЕТ</div>
        <div class="ceys_full full lk-content" style="font-family: Open Sans;">
            <div class="lk-left-column">
                <img src="{{$u->avatar}}"
                     class="lk-img">
                <div class="info-block">
                    <div class="lk-margin" style="margin-bottom:-15px">
                        <span class="green bold balance_icon">Баланс: </span>
                        <span class="grey bold">{{$u->balance}} руб</span>
                    </div>
                    <div class="lk-margin relative">
                        <span class="lk-label">Ваша реферальная ссылка:</span>
                        <input type="text" id="ref_url" class="lk-ref" name="ref"
                               value="http://{{$config->namesite}}/?code={{$u->affiliate_code}}">
                    </div>
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 3}, 146604383);
                    </script>
                </div>
            </div>
            <div class="lk-right-column">
                <div class="lk-nav-tab">
                    <span class="bold lk-h1 " data-tab="games"> ваши игры</span>
                    <span class="bold lk-h1 noactive" data-tab="referers"> реферальная система</span>
                    <span class="bold lk-h1 noactive" data-tab="promo"> промокоды</span>
                </div>
                <div class="clear"></div>

                <div class="tab-content" id="games" style="">
                    <div class="item_loop2">
                        @foreach ($wins as $win)
                            <div class="items" onClick="window.open('/get/{{$win->id}}/')">
                                <div class="item_images1">
                                    <img src="{{$win->item->img}}" alt=""/>
                                    <a class="item_open1">Получить</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-content" id="referers" style="display: none;">
                    <span class="lk-info">Вы можете заработать на любимую игру прямо у нас на сайте. Для этого вам нужно приглашать друзей и знакомых на сайт по вашей реферальной ссылке. Вы будете получать 5% от каждого пополнения.</span>
                    <div class="block-url-ref">
                        <span class="lk-label-ref">Ваша реферальная ссылка:</span>
                        <input type="text" class="ref-url"
                               value="http://{{$config->namesite}}/?code={{$u->affiliate_code}}">
                    </div>
                    <ul class="list-info">
                        </li>
                        <li>Вы пригласили пользователей: <span class="grey">{{$count_ref}}</span></li>
                        <li>Вы заработали: <span class="grey">{{$u->affiliate_profit}} р.</span></li>
                    </ul>
                    <div class="block-url-ref" style="margin-top: 100px;">
                        <span class="lk-label-ref">Поделиться и начать зарабатывать:</span>
                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                        <script src="//yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" id="my-share2"
                             data-services="collections,vkontakte,twitter,facebook,viber,skype,telegram"
                             data-counter=""></div>
                    </div>
                </div>

                <div class="tab-content" id="promo" style="display: none;">
                    <span class="lk-info">Вводите промокод (тут можно еще букаф вписать)</span>
                    <div class="block-url-ref">
                        <span class="lk-label-ref">Промокод:</span>
                        <input type="text" class="ref-url" id="code" style="width: 89%"
                               value="" placeholder="FREE">
                        <button style="height: 45px;line-height: 32px;text-align: center;position: absolute;color: #fff;z-index: 77; border-radius: 3px; padding: 5px;font-weight: bold;cursor: pointer;" onclick="promocodeUse()">Принять</button>
                    </div>
                </div>

            </div>
        </div>
    </center>
    <script type="text/javascript">
        var share = Ya.share2('my-share2', {
            content: {
                url: 'https://{{$config->namesite}}/?code={{$u->affiliate_code}}',
                title: '{{$config->namesite}} - Выиграй топовую игру всего за 69р!',
                description: 'Тут Вы по-настоящему можете испытать свою удачу. \nСамое главное, это возможность получить Дорогую игру, при этом оплатив всего 69 руб. \nВ LIVE-ленте отображаются полученные игры наших реальных клиентов! \nПроцесс полностью автоматизирован!',
                image: 'https://{{$config->namesite}}/images/banner.png'
            }, theme: {counter: false}
        });
        var promocodeUse = function () {
            $.ajax({
                method: 'POST', url: '/api/promocodeUse?code='+$('#code').val(), success: function (data) {
                    $('#modal_error_header').text(data.message);
                    $('#modal_error_message').html('<a class="login arcticmodal-close" style="cursor: pointer">Закрыть</a>');
                    $('#modal_error').arcticmodal();
                }
            });
        }
    </script>
@endsection