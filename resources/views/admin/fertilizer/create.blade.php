@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление удобрения</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.fertilizer.index')}}">Удобрения</a></li>
                            <li class="breadcrumb-item active">Добавление удобрения</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.fertilizer.store')}}" method="post" class="w-50">
                            @csrf
                            <div class="form-group ">
                                <input type="text" class="form-control " name="title" placeholder="Название">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <input type="number" step="any" class="form-control mt-3" name="norm_nitrogen"
                                       placeholder="Норма Азот">
                                @error('norm_nitrogen')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <input type="number" step="any" class="form-control mt-3" name="norm_phosphorus"
                                       placeholder="Норма Фосфор">
                                @error('norm_phosphorus')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <input type="number" step="any" class="form-control mt-3" name="norm_potassium"
                                       placeholder="Норма Калий">
                                @error('norm_potassium')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group ">
                                <input type="text" class="form-control mt-10" name="area" placeholder="Регион">
                                @error('area')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <input type="number" step="any" class="form-control mt-3" name="price"
                                       placeholder="Цена">
                                @error('price')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control mt-3" name="description" placeholder="Описание">
                                @error('description')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control mt-3" name="purpose" placeholder="Назначение">
                                @error('purpose')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Группа культур</label>
                                <select name="crops_id" class="form-control">
                                    @foreach($crops as $crop)
                                        <option value="{{$crop->id}}
                            {{$crop->id==old('crops_id') ?'selected':''}}">
                                            {{$crop->title}}</option>
                                    @endforeach
                                </select>
                                @error('crops_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>

                </div>


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
