@extends ('layout.master')



@section ('content')
<div class="login-form">
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Электронный Адрес</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="Электронный Адрес">
        </div>
        <div class="form-group">
            <label>Пароль </label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Пароль ">
        </div>

        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Войти</button>

    </form>
    <div class="register-link">
        <p>
            У тебя нет аккаунта?
            <a href="{{route('auth#registerPage')}}">Зарегистрироваться Здесь</a>
        </p>
    </div>
</div>

@endsection

