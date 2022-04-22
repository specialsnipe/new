@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Удобрения</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Удобрения</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-2">
                        <a href="{{route('admin.fertilizer.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="row pt-3 w-100">
            <div class="col-12">
                <div class="card ">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 ">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Норма азота</th>
                                <th>Норма фосфора</th>
                                <th>Норма калия</th>
                                <th>Группа культур</th>
                                <th>Регион</th>
                                <th>Цена</th>
                                <th>Просмотр</th>
                                <th>Редактирование</th>
                                <th>Удаление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fertilizers as $fertilizer)
                                <tr>
                                    <td>{{$fertilizer->id}}</td>
                                    <td>{{$fertilizer->title}}</td>
                                    <td>{{$fertilizer->norm_nitrogen}}</td>
                                    <td>{{$fertilizer->norm_phosphorus}}</td>
                                    <td>{{$fertilizer->norm_potassium}}</td>
                                    <td>{{$fertilizer->crop->title}}</td>
                                    <td>{{$fertilizer->area}}</td>
                                    <td>{{$fertilizer->price}}</td>
                                    <td><a href="{{route('admin.fertilizer.show',$fertilizer->id)}}" class=" m-4"> <i
                                                class="fas fa-eye"></i></a>
                                    </td>
                                    <td><a href="{{route('admin.fertilizer.edit',$fertilizer->id)}}"
                                           class="text-success m-5"> <i
                                                class="fas fa-pen"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{route('admin.fertilizer.delete',$fertilizer->id)}}"
                                              method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger col-3"
                                                   role="button"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
                <div>

                </div>
                <div>
                    <a href="{{route('admin.deleted.fertilizer.index')}}" class="btn btn-app bg-danger float-sm-right">
                        <span class="badge bg-teal">{{$fertilizersCount}}</span>
                        <i class="fas fa-trash"></i> Удаленные
                    </a>
                </div>
                <!-- /.card -->
                <div>
                    {{$fertilizers->withQueryString()->links()}}
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection
