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


        <div class="container-fluid">

            <form action="{{route('admin.fertilizer.index')}}" method="get">

                <div class="row">
                    <div class=" col-6 form-group mt-3">
                        <input type="search" name="title" class="form-control" placeholder="Поиск по названию"
                               value="{{request()->title}}">
                    </div>
                    <div class=" col-6 form-group mt-3">
                        <input type="search" name="description" class="form-control" placeholder="Поиск по описанию"
                               value="{{request()->description}}">
                    </div>

                </div>
                <div class="row">
                    <div class=" col-6 form-group mt-3">
                        <input type="search" name="purpose" class="form-control" placeholder="Поиск по назначению"
                               value="{{request()->purpose}}">
                    </div>

                    <div class=" col-6 form-group mt-3">
                        <select class="select2" name="region[]" multiple="multiple"
                                data-placeholder="Выберете регионы" style="width: 100%;">
                            @foreach($allFertilizers as $item)
                                <option
                                    {{is_array(request()->area)&& in_array($item->area,request()->area)?'selected':''}} value="{{$item->area}}">{{$item->area}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 form-inline">
                        <div class="ml-3 form-inline">
                            <label>Норма азот:</label>
                            <input type="text" class="form-control  mr-2 ml-1 mt-3" name="norm_nitrogen_From"
                                   placeholder="от"
                                   value="{{request()->norm_nitrogen_From}}">
                        </div>
                        <div class="col form-inline">
                            <label class="ml-1"></label>
                            <input type="text" class="form-control ml-2 mt-3" name="norm_nitrogen_To" placeholder="до"
                                   value="{{request()->norm_nitrogen_To}}">
                        </div>
                    </div>
                    <div class="col-2 form-inline">
                        <div class="form-inline">
                            <label>Норма Фосфор:</label>
                            <input type="text" class="form-control  ml-1 mt-3" name="norm_phosphorus_From"
                                   placeholder="от"
                                   value="{{request()->norm_phosphorus_From}}">
                        </div>

                        <div class="form-inline">
                            <input type="text" class="form-control ml-1 mt-3" name="norm_phosphorus_To" placeholder="до"
                                   value="{{request()->norm_phosphorus_To}}">
                        </div>
                    </div>
                    <div class="col-2 form-inline">
                        <div class="form-inline">
                            <label>Норма калий:</label>
                            <input type="text" class="form-control  ml-1 mt-3" name="norm_potassium_From"
                                   placeholder="от"
                                   value="{{request()->norm_potassium_From}}">
                        </div>

                        <div class="form-inline">
                            <input type="text" class="form-control ml-1 mt-3" name="norm_potassium_To"
                                   placeholder="до"
                                   value="{{request()->norm_potassium_To}}">
                        </div>
                    </div>
                    <div class=" col-6 form-group mt-3">
                        <select class="select2" name="crops_id[]" multiple="multiple"
                                data-placeholder="Выберете группы культур" style="width: 100%;">
                            @foreach($crops as $crop)
                                <option
                                    {{is_array(request()->crops_id)&& in_array($crop->id,request()->crops_id)?'selected':''}} value="{{$crop->id}}">{{$crop->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mt-3">
                        <!-- radio -->
                        <div class="form-group">
                            <label>Сортировка по цене</label>
                            <div class="form-check">
                                <input id="order_By_Price" type="radio" name="order_By_Price"
                                       value="asc" {{request()->order_By_Price=='asc' ? 'checked' : ''}}>
                                <label for="order_By_Price">по возрастанию</label><br>
                            </div>
                            <div class="form-check">
                                <input id="order_By_Price1" type="radio" name="order_By_Price"
                                       value="desc"{{ request()->order_By_Price=='desc' ? 'checked' : ''}}>
                                <label for="order_By_Price1">по убыванию</label><br>
                            </div>
                            <div class="form-check">
                                <input id="order_By_Price2" type="radio" name="order_By_Price"
                                       value=""{{ request()->order_By_Price=='' ? 'checked' : ''}}>
                                <label for="order_By_Price2">без сортировки</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mt-4">
                        <div class="form-group">
                            <label>Сортировка по названию</label>
                            <div class="form-check">
                                <input id="order_By_Title" type="radio" name="order_By_Title"
                                       value="asc" {{request()->order_By_Title=='asc' ? 'checked' : ''}}>
                                <label for="order_By_Title">A-Z</label><br>
                            </div>
                            <div class="form-check">
                                <input id="order_By_Title1" type="radio" name="order_By_Title"
                                       value="desc"{{ request()->order_By_Title=='desc' ? 'checked' : ''}}>
                                <label for="order_By_Title1">Z-A</label><br>
                            </div>
                            <div class="form-check">
                                <input id="order_By_Title2" type="radio" name="order_By_Title"
                                       value=""{{ request()->order_By_Title=='' ? 'checked' : ''}}>
                                <label for="order_By_Title2">без сортировки</label><br>
                            </div>

                        </div>
                    </div>

                    <div class="form-inline">
                        <label class="ml-5">Цена</label>
                        <input type="text" class="form-control  ml-1 mt-3" name="price_From" placeholder="от"
                               value="{{request()->price_From}}">
                    </div>

                    <div class="form-inline">
                        <label class="ml-3"></label>
                        <input type="text" class="form-control ml-1 mt-3" name="price_To" placeholder="до"
                               value="{{request()->price_To}}">
                    </div>


                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary ml-3 " value="Сортировка">
                </div>
                <div class="ml-3">
                    <a href="{{route('admin.fertilizer.index')}}">Сбросить</a>
                </div>
            </form>
            <div class="row">
                <div class="col-6 w-50 mr">
                    <form action="{{route('admin.fertilizer.excel.import')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputFile" class="ml-3">Импорт excel таблицы</label>
                            <div class="input-group">
                                <div class="custom-file ml-3 mb-3">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                    <label class="custom-file-label" for="exampleInputFile">Выберете excel
                                        таблицу</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text mb-3">Загрузка</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary ml-3 " value="Загрузить таблицу">
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="ml-3 w-50">
                <a href="{{route('admin.fertilizer.excel.export')}}"
                   class="btn btn-block btn-success">Export excel таблицы</a>

            </div>


            <!-- /.content-header -->
            <!-- main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

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
                                    <th>Описание</th>
                                    <th>Назначение</th>
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
                                        <td>{{$fertilizer->description}}</td>
                                        <td>{{$fertilizer->purpose}}</td>
                                        <td><a href="{{route('admin.fertilizer.show',$fertilizer->id)}}" class=" m-4">
                                                <i
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
                    <div class="col-2 mt-3">
                        <a href="{{route('admin.fertilizer.create')}}"
                           class="btn btn-block btn-primary">Добавить</a>
                    </div>

                    <a href="{{route('admin.deleted.fertilizer.index')}}"
                       class="btn btn-app bg-danger float-sm-right">
                        <span class="badge bg-teal">{{$fertilizersCount}}</span>
                        <i class="fas fa-trash"></i> Удаленные
                    </a>
                    <div class="mt-3">
                        {{$fertilizers->withQueryString()->links()}}
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
@endsection
