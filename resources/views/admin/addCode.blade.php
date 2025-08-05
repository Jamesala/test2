@extends('admin.layout')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="wraper container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="card-box">
                            <form class="form-horizontal group-border-dashed" action="/admin/addCodePost" novalidate="">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Код</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="FREE" name="code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Кол-во</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" required="" placeholder="20" name="count">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Цена</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" required="" placeholder="5" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                        <button type="submit" class="btn btn-primary">
                                            Создать
                                        </button>
                                        <button type="reset" class="btn btn-default m-l-5">
                                            Отмена
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection