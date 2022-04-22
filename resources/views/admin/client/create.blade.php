@extends('admin.layouts.main')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление клиента</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.client.index')}}">Клиенты</a></li>
                        <li class="breadcrumb-item active">Добавление клиента</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.client.store')}}" method="post" class="w-50">
                @csrf
                <div class="form-group ">
                    <input type="text" class="form-control " name="title" placeholder="Название">
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <input type="date" class="form-control  mt-3" name="date" placeholder="Дата">
                    @error('date')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <input type="number" step="0.1" class="form-control mt-3" name="price" placeholder="Стоимость">
                    @error('price')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control mt-3" name="region" placeholder="Регион">
                    @error('region')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
