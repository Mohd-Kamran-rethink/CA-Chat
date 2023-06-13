<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CA-Chat | Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body style="background: rgb(234, 111, 11)">
    <div class="container"  style="position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);">
        <div class="row justify-content-center" style="">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                       <h4 class="text-center">Crick Adda | ChatApp </h4> 
                    </div>

                    <div class="card-body">
                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>

                            <div class="form-group mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="current-password" />
                            </div>

                            <div class="form-group form-check mt-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                <label class="form-check-label" for="remember_me">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            {{-- <div class="form-group mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div> --}}

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
