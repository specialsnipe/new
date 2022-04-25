@extends('admin.layouts.main')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Изменение группы культур</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.crop.index')}}">Группы культур</a></li>
                        <li class="breadcrumb-item active">Изменение Группы культур</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.crop.update',$crop->id)}}" method="POST" class="w-50">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$crop->title}}" placeholder="Изменить группу культур">
                    @error('title')
                    <div class="text-danger">Это поле необходимо заполнить</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Изменить">
            </form>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
