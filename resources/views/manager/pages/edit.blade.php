@extends('manager.layouts.common')
@section('title', 'Yönetim Paneli')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-crm">
                    <div class="panel-heading"><h1>Yeni Bir Sayfa Oluştur</h1></div>
                    <div class="panel-body">
                        {{ Form::open(array('url'=>route('manager.pages-edit-post'),'method'=>'post','autocomplete'=>'off')) }}
                        {{ Form::hidden('id',$page->id) }}
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{ Form::label('sayfaAdi', 'Sayfa Adı')}}
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                    {{ Form::text('sayfaAdi',$page->page_name,array('class'=>'form-control','id'=>'sayfaAdi','placeholder'=>'Sayfa Adı')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::submit('Oluştur',array('class'=>'btn btn-lg btn-success btn-block')) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection