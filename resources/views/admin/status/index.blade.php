@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Группы культур</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Таблица импорт-статус</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
            </div><!-- /.container-fluid -->
        </section>
        <div class="row pt-3 ">
            <div class="col-12">
                <div class="card ">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 ">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название файла</th>
                                <th>Статус</th>
                                <th>Пользователь</th>
                                <th>Дата создания статуса</th>
                                <th>Ошибки</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($importStatus as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->filename}}</td>
                                    <td>
                                        @foreach($statusName as $name=>$value)
                                            @if($item->status==$name)
                                                {{$value}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->failed}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div>
                    {{ $importStatus->links() }}
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection
