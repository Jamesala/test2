@extends('layout')

@section('content')
    <div class="feedback_full full">
        <div class="feedback_title"><b>Главная /</b> Оплата</div>
        <div class="total_form" id="pay">
            <h2 class="offer_pay-col-title">Минимальная сумма пополнения 10 рублей</h2>
            <form action="/api/payment/create" method="post">
                <input id="curr" name="type_curr" type="hidden" value="WMR_merchant">
                <input name="cent" type="hidden">
                <div class="total">
                    СУММА:
                </div>
                <div class="field_data">
                    <input maxlength="4" name="sum" required="" type="text" value="300">
                </div>
                <button id="sub" onclick="yaCounter39708050.reachGoal('balance'); return true;" type="submit">ОПЛАТИТЬ
                </button>
            </form>
        </div>
        <div class="type_pay offer_pay">
            <div class="offer_pay-in">
                <div class="offer_pay-col-wrap">
                    <div class="offer_pay-col" style="margin-left: 90px; ">
                        <h2 class="offer_pay-col-title">Электронные деньги</h2>
                        <a class="wmr wmr_cont active" data-curr="WMR_merchant"
                           href="#">Webmoney<span>0% комиссия</span></a>
                        <a class="qiwi" data-curr="QSR" href="#">QIWI<span>5% комиссия</span></a>
                        <a class="yad" data-curr="PCR" href="#">Яндекс.Деньги<span>6% комиссия</span></a>
                        <a class="steampay disabled" data-curr="steampay" href="#">Оплата скинами<span>Без комиссии</span></a>
                        <a class="paypal disabled" data-curr="PLR" href="#">PayPal<span>19% комиссия</span></a>
                    </div>
                    <div class="offer_pay-col">
                        <h2 class="offer_pay-col-title">Банковские карты</h2><a class="visa" data-curr="RCC" href="#">VISA
                            / Master Card <span>2.3% комиссия</span></a> <a class="online-bank" data-curr="BNK"
                                                                            href="#">Онлайн банкинг<br>
                            (Сбербанк онлайн, Альфа клик, ВТБ24)<span>Комиссия от 2.5%</span></a>
                    </div>
                    <div class="offer_pay-col">
                        <h2 class="offer_pay-col-title">Мобильные операторы</h2><a class="mts" data-curr="MTS" href="#">МТС<span>3.5% комиссия</span></a>
                        <a class="bee" data-curr="BLN" href="#">Билайн<span>18.6% комиссия</span></a> <a class="megaf"
                                                                                                         data-curr="Megafon"
                                                                                                         href="#">Мегафон<span>23% комиссия</span></a>
                        <a class="tele2" data-curr="Tele2" href="#">Tele2<span>25% комиссия</span></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
@endsection