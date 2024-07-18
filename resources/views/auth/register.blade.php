<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/form.css"> <!-- Assuming you have a separate CSS file -->
    <style>
        /* Basic styling to ensure elements are aligned and styled consistently */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
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
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            font-size: 16px;
        }
        input[type="file"] {
            padding: 8px 0;
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
            text-align: right;
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
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-row">
                <div class="input-data">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    <div class="underline"></div>
                    <label for="name">Name</label>
                </div>
                <div class="input-data">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="underline"></div>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    <div class="underline"></div>
                    <label for="phone">Phone</label>
                </div>
                <div class="input-data">
                    <input id="password" type="password" name="password" required autocomplete="new-password">
                    <div class="underline"></div>
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    <div class="underline"></div>
                    <label for="password_confirmation">Confirm Password</label>
                </div>
            </div>

            <div class="form-row submit-btn">
                <button type="submit">Register</button>
            </div>

            <div class="form-footer">
                <a href="{{ route('login') }}">Already registered? Login here</a>
            </div>
        </form>
    </div>
</body>
</html>
