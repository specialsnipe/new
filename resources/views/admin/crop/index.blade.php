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
                            <li class="breadcrumb-item active">Группы культур</li>
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
                <div class="row">
                    <div class="col-2">
                        <a href="{{route('admin.crop.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="row pt-3 w-50">
            <div class="col-12">
                <div class="card ">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 ">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Просмотр</th>
                                <th>Редактирование</th>
                                <th>Удаление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($crops as $crop)
                                <tr>
                                    <td>{{$crop->id}}</td>
                                    <td>{{$crop->title}}</td>
                                    <td><a href="{{route('admin.crop.show',$crop->id)}}" class=" m-4"> <i
                                                class="fas fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.crop.edit',$crop->id)}}" class="text-success m-5"> <i
                                                class="fas fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.crop.delete',$crop->id)}}" method="POST">
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
                <a href ="{{route('admin.deleted.crop.index')}}" class="btn btn-app bg-danger">
                    <span class="badge bg-teal">{{$cropsCount}}</span>
                    <i class="fas fa-trash"></i> Удаленные
                </a>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection
