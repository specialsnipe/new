@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение данных о пользователе</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Изменение данных о пользователе</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('admin.user.update',$user->id)}}" method="POST" class="w-50">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control " name="name" value="{{$user->name}}"
                               placeholder="Изменить имя">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control mt-3" name="email" value="{{$user->email}}"
                               placeholder="Изменить почту">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Изменить">
            </form>


    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
