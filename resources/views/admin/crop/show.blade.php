@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$crop->title}} </h1>
                        <a href="{{route('admin.crop.edit',$crop->id)}}" class="text-success m-5"> <i class="fas fa-pen"></i></a>
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
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.crop.index')}}">Группы культур</a></li>
                            <li class="breadcrumb-item active">{{$crop->title}}</li>
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
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$crop->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$crop->title}}</td>
                            </tr>





                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection
