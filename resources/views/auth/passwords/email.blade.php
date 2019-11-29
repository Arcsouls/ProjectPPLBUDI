<!DOCTYPE html>
<html>
<head>
      <style>
                body{
                    background-image:url(../b/assets/images/daftarimg.jpg);
                    background-size:cover;
                    background-attachment: fixed;
                }
         </style>
         
        <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="../b/assets/css/style5.css">
    <link rel="shortcut icon" href="../b/images/bksda.png" type="image/x-icon">

    <script src="assets/js/daftar.js"></script>
    
</head>
    
<body>
    <div id="main">
       </nav>   
        <div class="wrap">
        <form style="height: 400px;">
          <img src="../b/images/bksda.png" class="logo">
          <h2>Reset Password</h2>
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="button" type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </form>
      </div>
</body>
</html>