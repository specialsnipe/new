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
                            <li class="breadcrumb-item"><a href="{{route('admin.fertilizer.index')}}">Удобрения</a></li>
                            <li class="breadcrumb-item active">Изменение удобрения</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('admin.fertilizer.update',$fertilizer->id)}}" method="POST" class="w-50">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                        <input type="text" class="form-control mt-3" value="{{$fertilizer->title}}" name="title"
                               placeholder="Изменить название">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <input type="number" step="any" class="form-control mt-3" value="{{$fertilizer->norm_nitrogen}}"
                               name="norm_nitrogen"
                               placeholder="Изменить норму азота">
                        @error('norm_nitrogen')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <input type="number" step="any" class="form-control mt-3"
                               value="{{$fertilizer->norm_phosphorus}}" name="norm_phosphorus"
                               placeholder="Изменить норму фосфора">
                        @error('norm_phosphorus')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <input type="number" step="any" class="form-control mt-3"
                               value="{{$fertilizer->norm_potassium}}" name="norm_potassium"
                               placeholder="Изменить норму калия">
                        @error('norm_potassium')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group ">
                        <input type="text" class="form-control mt-3" value="{{$fertilizer->area}}" name="area"
                               placeholder="Изменить регион">
                        @error('area')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <input type="number" step="any" class="form-control mt-3" value="{{$fertilizer->price}}"
                               name="price" placeholder="Изменить цену">
                        @error('price')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <input type="text" class="form-control mt-3" value="{{$fertilizer->description}}"
                               name="description" placeholder="Изменить описание">
                        @error('description')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <input type="text" class="form-control mt-3" value="{{$fertilizer->purpose}}" name="purpose"
                               placeholder="Изменить назначение">
                        @error('purpose')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Группа культур</label>
                        <select name="crops_id" class="form-control">
                            @foreach($crops as $crop)
                                <option value="{{$crop->id}}
                            {{$crop->id==old('crop_id') ?'selected':''}}">
                                    {{$crop->title}}</option>
                            @endforeach
                        </select>
                        @error('crops_id')
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
