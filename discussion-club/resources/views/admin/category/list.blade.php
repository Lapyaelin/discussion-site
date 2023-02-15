@extends('admin.layout.master')

@section('content')
<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Список Темы</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <a href="{{route('list#createPage')}}">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Добавить тему
                                        </button>
                                    </a>
                                    {{-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        CSV download
                                    </button> --}}
                                </div>
                            </div>
                            @if(session('deleteSuccess'))
                           <div class="row">
                                <div class="col-md-3 alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-xmark"></i>{{session('deleteSuccess')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                           </div>
                            @endif
                            @if(count($categories)!=0)
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Название Темы</th>
                                            <th>Дата Создания</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $category )
                                        <tr class="tr-shadow">
                                            <td>{{$category->topic_id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at->format('j-F-Y')}} </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button> --}}
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <a href="{{route('list#deleteTopic',$category->topic_id)}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </a>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    {{$categories->links()}}
                                </div>
                            </div>
                             @else
                                    <h1>Здесь нет темы</h1>
                                    @endif
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
