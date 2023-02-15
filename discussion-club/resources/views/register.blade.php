@extends('layout.master')

@section('content')
      <div class="login-form">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                @error('terms')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Имя Пользователя</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Имя">
                                </div>
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Электронный Адрес</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Электронная Почта">
                                </div>
                                @error('email')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Номер телефона</label>
                                    <input class="au-input au-input--full" type="number" name="phone" placeholder="Номер телефона">
                                </div>
                                @error('phone')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Университет</label>
                                    <input class="au-input au-input--full" type="text" name="university" placeholder="Университет">
                                </div>
                                @error('university')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Адрес</label>
                                    <input class="au-input au-input--full" type="text" name="address" placeholder="Адрес">
                                </div>
                                @error('address')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Пароль">
                                </div>
                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Подтверждение пароля">
                                </div>
                                @error('password_confirmation')
                                <small class="text-danger">{{$message}}</small>
                                @enderror

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Регистрироваться</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    У вас уже есть аккаунт?
                                    <a href="{{route('auth#loginPage')}}">Войти</a>
                                </p>
                            </div>
                        </div>

                        @endsection
