@extends('manager.layouts.common')
@section('title', 'Yönetim Paneli')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-crm">
                    <div class="panel-heading">
                        <h1><i class="fa fa-eye" aria-hidden="true"></i> Sayfaları Görüntüle</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-crm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sayfa Adı</th>
                                    <th></th>
                                    <th></th>
                                    <th class="col-sm-1">İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($pages as $page)
                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{$page->page_name}}</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group btn-group-justified" role="group">
                                                <div class="btn-group" role="group">
                                                    <a type="button" class="btn btn-xs btn-info" href="" role="button"><span class="fa fa-eye" aria-hidden="true"></span></a>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <a type="button" class="btn btn-xs btn-warning" href="{{route('manager.pages-edit',$page->id)}}" role="button"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#removeModal" data-id="{{$page->id}}" data-name="{{$page->page_name}}">
                                                        <span class="fa fa-trash-o" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group" role="group">
                                <a type="button" class="btn btn-xl btn-success" href="{{route('manager.pages-create')}}" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Bir Sayfa Oluştur</a>
                            </div>
                            <div class="btn-group" role="group">
                                <a type="button" class="btn btn-xl btn-info" href="{{ route('manager.content-create') }}" role="button"><i class="fa fa-eye" aria-hidden="true"></i> Yeni Bir İçerik Oluştur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(array('url'=>route('manager.pages-remove-post'),'method'=>'post','autocomplete'=>'off')) }}
                {{ Form::hidden('id', '', array('id' => 'id')) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="removeModalLabel">Bir Sayfayı Sil</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            {{ Form::label('sayfaAdi', 'Sayfa Adı')}}
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                                {{ Form::text('sayfaAdi',null,array('class'=>'form-control','id'=>'sayfaAdi','placeholder'=>'Sayfa Adı','disabled'=>'disabled')) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                            {{ Form::submit('Sil', array('class' => 'btn btn-danger btn-lg btn-block')) }}
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-info btn-lg" data-dismiss="modal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Geri Dön</button>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <script>
        $('#removeModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            var name = button.data('name');
            modal.find('.modal-title').text('Bir Sayfayı Sil -> ' + name);
            $('#id').val(id);
            modal.find('.modal-body #sayfaAdi').val(name);
        })
    </script>
@endsection