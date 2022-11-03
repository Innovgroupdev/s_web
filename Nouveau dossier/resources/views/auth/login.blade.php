<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, " name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition login-page">
    <div style="position:absolute;background-color:orangered;opacity:.1;width:20rem;aspect-ratio:1;border-radius:50%;left:10%;top:10%"></div>
    <div style="position:absolute;background-color:orangered;opacity:.1;width:15rem;aspect-ratio:1;border-radius:50%;margin-left:20%;margin-top:17%"></div>
    <div style="position:absolute;background-color:orangered;opacity:.2;width:30rem;aspect-ratio:1;border-radius:50%;right:-10%;top:-17%"></div>
    <div style="position:absolute;background-color:orangered;opacity:.1;width:5rem;aspect-ratio:1;border-radius:50%;left:25%;bottom:17%"></div>
<div class="login-box w-25">
    <div class="login-logo mb-4">
        <a href="{{ url('/') }}" class="h1 text-uppercase" style="font-weight:500;color:orangered"  ><b>{{ config('app.name') }}</b></a>
    </div>
    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card shadow" >
        <div class="card-body login-card-body p-5" style="border-radius:15px">
            <p class="login-box-msg">Uniquement reservé à l'administration !</p>

            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group my-3">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group my-3">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

                <div class="row">
                    <!-- <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                    </div> -->

                    <div class="col-12 mt-3">
                        <button type="submit" style="background-color: orangered;" class="btn text-light btn-block">Connexion</button>
                    </div>

                </div>
            </form>

{{--            <p class="mb-1">--}}
{{--                <a href="{{ route('password.request') }}">I forgot my password</a>--}}
{{--            </p>--}}
{{--            <p class="mb-0">--}}
{{--                <a href="{{ route('register') }}" class="text-center">Register a new membership</a>--}}
{{--            </p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>

</div>
<!-- /.login-box -->

<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>