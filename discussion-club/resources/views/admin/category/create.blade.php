@extends('admin.layout.master')

@section('content')
<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{route('admin#listPage')}}"><button class="btn bg-dark text-white my-3">Список</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Форма Темы</h3>
                                    </div>
                                    <hr>
                                    <form action="{{route('list#createTopic')}}" method="post" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group">
                                            <label for="cc" class="control-label mb-1">Название</label>
                                            <input id="cc" name="categoryName" value="{{old('categoryName')}}" type="text" class="form-control @error('categoryName') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Русский язык...">
                                             @error('categoryName')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        </div>

                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <span id="payment-button-amount">Создать</span>
                                                {{-- <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                <i class="fa-solid fa-circle-right"></i> --}}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
