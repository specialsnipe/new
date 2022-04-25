@extends('admin.layouts.main')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Изменение данных о клиенте</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.client.index')}}">Клиенты</a></li>
                        <li class="breadcrumb-item active">Изменение данных о клиенте</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.client.update',$client->id)}}" method="POST" class="w-50">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" class="form-control " name="title" value="{{$client->title}}" placeholder="Изменить название">
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <input type="date" class="form-control mt-3" name="date" value="{{$client->date}}" placeholder="Изменить дату договора">
                    @error('date')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <input type="number" step="any" class="form-control mt-3" name="price" value="{{$client->price}}" placeholder="Изменить cтоимость">
                    @error('price')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control mt-3" name="region" value="{{$client->region}}" placeholder="Изменить регион">
                    @error('region')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Изменить">
            </form>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
