<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/form.css"> <!-- Assuming you have a separate CSS file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        /* Basic styling to ensure elements are aligned and styled consistently */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-row {
            margin-bottom: 20px;
        }
        .input-data {
            position: relative;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            font-size: 16px;
        }
        .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #ccc;
        }
        label {
            position: absolute;
            top: 10px;
            left: 0;
            color: #777;
            transition: top 0.3s, font-size 0.3s;
        }
        input:focus + .underline {
            background-color: #007bff;
        }
        input:focus ~ label, input:not(:placeholder-shown) ~ label {
            top: -10px;
            font-size: 12px;
            color: #007bff;
        }
        .submit-btn {
            text-align: center;
        }
        .submit-btn button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-btn button:hover {
            background-color: #0056b3;
        }
        .form-footer {
            margin-top: 10px;
            text-align: center;
        }
        .form-footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .form-footer a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-row">
                <div class="input-data">
                    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    <div class="underline"></div>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                    <div class="underline"></div>
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="form-row">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" class="btn btn-green-400 reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>

            <div class="form-row">
                <input type="text" class="form-control" placeholder="Enter Captcha" name="captcha">

            </div>

            <div class="form-row submit-btn">
                <div><button type="submit">Log in</button></div>
           </div>


        </div>

        </form>
    </div>

    <script>

        $('#reload').click(function(){
            $.ajax({
                type:'GET',
                url:'reload-captcha',
                success:function(data){
                    $(".captcha span").html(data.captcha)
                }
            });
        });




    </script>
</body>
</html>
{{-- <div class="form-footer">
            @if (Route::has('password.request'))

            <button href="{{ route('password.request') }}">Forgot your password?</button>

           @endif --}}
