@extends('layouts.auth_layout')

@section('title')
    Register
@endsection

@section('content')
    <div id="header-login">
        <h1>Administration Portfolio</h1>
        <h2>Dimitri Sandron</h2>
        <h3>Register</h3>
    </div>

    <div class="grid">
        <form action="{{ route('register') }}" method="POST" class="form login">
            {{ csrf_field() }}

            <div class="form__field">
                <label for="login__name">
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
                    </svg>

                    <span class="hidden">Name</span></label>
                <input id="login__name" type="text" name="name" class="form__input" placeholder="Name"
                       value="{{ $email or old('name') }}" required autofocus>
            </div>

            <div class="form__field">
                <label for="login__email">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="5px" viewBox="0 0 27.857 27.857"
                         style="enable-background:new 0 0 27.857 27.857;" xml:space="preserve" width="1em" height="1em">
                        <path d="M2.203,5.331l10.034,7.948c0.455,0.36,1.082,0.52,1.691,0.49c0.608,0.03,1.235-0.129,1.69-0.49    l10.034-7.948c0.804-0.633,0.622-1.152-0.398-1.152H13.929H2.604C1.583,4.179,1.401,4.698,2.203,5.331z"
                              fill="#606468"/>
                        <path d="M26.377,7.428l-10.965,8.325c-0.41,0.308-0.947,0.458-1.482,0.451    c-0.536,0.007-1.073-0.144-1.483-0.451L1.48,7.428C0.666,6.811,0,7.142,0,8.163v13.659c0,1.021,0.836,1.857,1.857,1.857h12.071H26    c1.021,0,1.857-0.836,1.857-1.857V8.163C27.857,7.142,27.191,6.811,26.377,7.428z"
                              fill="#606468"/>
                    </svg>
                    <span class="hidden">Email</span></label>
                <input id="login__email" type="email" name="email" class="form__input" placeholder="Email"
                       value="{{ $email or old('email') }}" required>
            </div>

            <div class="form__field">
                <label for="login__password">
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
                    </svg>
                    <span class="hidden">Password</span></label>
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password"
                       required>
            </div>

            <div class="form__field">
                <label for="login__password_confirmation">
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
                    </svg>
                    <span class="hidden">Password</span></label>
                <input id="login__password_confirmation" type="password" name="password_confirmation"
                       class="form__input" placeholder="Confirm password"
                       required>
            </div>

            <div class="form__field">
                <input type="submit" value="Register">
            </div>

        </form>

        <p class="text--center">Already a member? <a href="{{ route('login') }}">Login now</a></p>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
        <symbol id="arrow-right" viewBox="0 0 1792 1792">
            <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/>
        </symbol>
        <symbol id="lock" viewBox="0 0 1792 1792">
            <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/>
        </symbol>
        <symbol id="user" viewBox="0 0 1792 1792">
            <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/>
        </symbol>
    </svg>

@endsection
