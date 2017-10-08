@extends('manager.layouts.common')
@section('title', 'Yönetim Paneli')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-crm">
                    <div class="panel-heading"><h1>Yeni Bir İçerik Oluştur</h1></div>
                    <div class="panel-body">
                        {{ Form::open(array('url'=>route('manager.content-create-post'),'method'=>'post','autocomplete'=>'off','enctype'=>'multipart/form-data')) }}
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{ Form::label('icerikBasligi', 'İçerik Başlığı')}}
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                    {{ Form::text('icerikBasligi','',array('class'=>'form-control','id'=>'icerikBasligi','placeholder'=>'İçerik Başlığı')) }}
                                </div>
                            </div>
                        </div>
                        <?php

                        $page_name=array(''=>'Seçiniz..');
                        $x=1;
                        foreach($pages as $page)
                        {
                            $page_name[$x]= $page->page_name;
                            $x++;
                        }
                        ?>
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{ Form::label('kategori', 'Kategori')}}
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                    {{ Form::select('kategori',$page_name,array('class'=>'form-control','id'=>'kategori','placeholder'=>'Katagori')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{ Form::label('icerik', 'İçerik')}}
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                    {{ Form::textarea('icerik','',array('class'=>'form-control','id'=>'icerik','placeholder'=>'İçerik')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{ Form::label('dosya', 'Dosya')}}
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                    {{ Form::file('dosya',array('class'=>'form-control','id'=>'dosya','placeholder'=>'Dosya')) }}
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
    </div
@endsection