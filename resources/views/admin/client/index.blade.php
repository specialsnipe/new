@extends('admin.layouts.main')


@section('content')

    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Клиенты</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Клиенты</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="container-fluid">

            <form action="{{route('admin.client.index')}}" method="get">

                <div class="row">
                    <div class=" col-6 form-group mt-3">
                        <input type="text" name="title" class="form-control" placeholder="Введите название"
                               value="{{request()->title}}">
                    </div>

                    <div class=" col-6 form-group mt-3">
                        <select class="select2" name="region[]" multiple="multiple"
                                data-placeholder="Выберете регионы" style="width: 100%;">
                            @foreach($allClients as $сlients)
                                <option
                                    {{is_array(request()->region)&& in_array($сlients->region,request()->region)?'selected':''}} value="{{$сlients->region}}">{{$сlients->region}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ml-3 form-inline">
                        <label>Дата от:</label>
                        <input type="date" class="form-control  mr-2 ml-2 mt-3" name="date_From" placeholder="Дата"
                               value="{{request()->date_From}}">
                    </div>

                    <div class="form-inline">
                        <label class="ml-1">до:</label>
                        <input type="date" class="form-control ml-2 mt-3" name="date_To" placeholder="Дата"
                               value="{{request()->date_To}}">
                    </div>

                    <div class="form-inline">
                        <label class="ml-5">Цена:</label>
                        <input type="text" class="form-control  ml-1 mt-3" name="price_From" placeholder="от"
                               value="{{request()->price_From}}">
                    </div>

                    <div class="form-inline">
                        <label class="ml-3"></label>
                        <input type="text" class="form-control ml-1 mt-3" name="price_To" placeholder="до"
                               value="{{request()->price_To}}">
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
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary ml-3 " value="Сортировка">
                </div>
                <div class="ml-3">
                    <a href="{{route('admin.client.index')}}">Сбросить</a>
                </div>
            </form>

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
                                <th>Дата договора</th>
                                <th>Стоимость поставки</th>
                                <th>Регион</th>
                                <th>Просмотр</th>
                                <th>Редактирование</th>
                                <th>Удаление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->title}}</td>
                                    <td>{{$client->date}}</td>
                                    <td>{{$client->price}}</td>
                                    <td>{{$client->region}}</td>
                                    <td><a href="{{route('admin.client.show',$client->id)}}" class=" m-4"> <i
                                                class="fas fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.client.edit',$client->id)}}"
                                           class="text-success m-5">
                                            <i
                                                class="fas fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.client.delete',$client->id)}}" method="POST">
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
                    <a href="{{route('admin.client.create')}}" class="btn btn-block btn-primary">Добавить</a>
                </div>
                <a href="{{route('admin.deleted.client.index')}}" class="btn btn-app bg-danger float-sm-right">
                    <span class="badge bg-teal">{{$clientsCount}}</span>
                    <i class="fas fa-trash"></i> Удаленные
                </a>
                <div class="mt-3">
                    {{$clients->withQueryString()->links()}}
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection
