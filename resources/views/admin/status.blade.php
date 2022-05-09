@extends('admin.layouts.main')


@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Результат импорта</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="ml-3">
            <h3>
                @if ($newStatus==1)
                    {{'в процессе'}}
                @elseif($newStatus==2)
                    {{'Данные успешно импортированы'}}
                @else
                    {{'Ошибка во время импорта'}}
                @endif
            </h3>
        </div>
    </div>
@endsection
