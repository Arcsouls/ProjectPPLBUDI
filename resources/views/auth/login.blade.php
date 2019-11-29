<!DOCTYPE html>
<html>
<head>
        <style>
                body{
                    background-image:url(b/assets/images/loginimg.jpg);
                    background-size:cover;
                    background-attachment: fixed;
                }
         </style>

        <title>Login</title>
    <link rel="stylesheet" type="text/css" href="b/assets/css/style2.css">
    <link rel="shortcut icon" href="b/images/bksda.png" type="image/x-icon">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
    
<body>  
    <header>
        <div id="coba"> 
            <div class="loginbox1">
            <img src="b/images/bksda.png" style="padding-top: 7px; padding-left: 76px; width: 220px; height: 150px;">
            <h1>Login</h1>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input type="text" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div>
                        </div> -->

                        <!-- <div class="form-group row"> -->
                            <label for="password">{{ __('Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4"> -->
                                <!-- <div >
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                           <!--  </div>
                        </div> -->

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4"> -->
                                
                                <!-- <button class="button" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <a style="color: white;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                </form>
        </form>
    </div>
</header>

       
</html>