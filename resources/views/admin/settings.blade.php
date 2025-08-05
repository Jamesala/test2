@extends('admin.layout')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="/admin/saveSettings">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Настройки сайта</b></h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-20">
                                            <h5><b>Название сайта</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Указывается без http, например: EsCash.net
                                            </p>
                                            <input type="text" value="{{$config->namesite}}" class="form-control" maxlength="25" name="namesite">
                                        </div>
                                        <div class="p-20">
                                            <h5><b>VK Group</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Ссылка на группу ВК
                                            </p>
                                            <input type="text" value="{{$config->vkgroup}}" class="form-control" maxlength="25" name="vkgroup">
                                        </div>
                                        <div class="p-20">
                                            <h5><b>ID Аккаунта Digiseller</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                ID Аккаунта с сайта Digiseller
                                            </p>
                                            <input type="number" value="{{$config->shop_id_digiseller}}" class="form-control" maxlength="25" name="shop_id_digiseller">
                                        </div>
                                        <div class="p-20">
                                            <h5><b>ID Товара Digiseller</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                ID Товара с сайта Digiseller
                                            </p>
                                            <input type="text" value="{{$config->id_tovar_digiseller}}" class="form-control" maxlength="25" name="id_tovar_digiseller">
                                        </div>
                                        <div class="p-20">
                                            <h5><b>Пароль аккаунта Digiseller</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Пароль аккаунта Digiseller
                                            </p>
                                            <input type="text" value="{{$config->password_digiseller}}" class="form-control" maxlength="25" name="password_digiseller">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-20">
                                            <h5><b>Shop ID Оплаты FreeKassa</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Shop ID с платежки FreeKassa
                                            </p>
                                            <input type="number" value="{{$config->shop_id_freekassa}}" class="form-control" maxlength="25" name="shop_id_freekassa">
                                        </div>
                                        <div class="p-20">
                                            <h5><b>Secret Word Оплаты FreeKassa</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Secret Word с платежки FreeKassa
                                            </p>
                                            <input type="text" value="{{$config->secret_word_freekassa}}" class="form-control" maxlength="25" name="secret_word_freekassa">
                                        </div>
                                        <div class="p-20">
                                            <h5><b>Платежная система</b></h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Выберите систему, с помощью которой люди будут вносить деньги
                                            </p>
                                            <select class="form-control select2" name="payment">
                                                @if($config->payment == 'freekassa')
                                                    <option value="freekassa">FreeKassa</option>
                                                    <option value="digiseller">Oplata.info</option>
                                                @else
                                                    <option value="digiseller">Oplata.info</option>
                                                    <option value="freekassa">FreeKassa</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection