<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fithub - Create New Account</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .account-container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .account-container h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .account-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: calc(100% - 30px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .password-toggle {
            position: absolute;
            top:70%;
            right: 15px;
            transform: translateY(-60%);
            cursor: pointer;
            color: #777;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .checkbox{
            font-style:normal;
            font-size:14px;
            color:black;
        }
        .checkbox a{
            color:blue;
        }
        .checkbox a:hover{
            color:red;
        }
        .login p{
           font-size:14px;
        }

    </style>

</head>
<body>
<div class="account-container">
    <h1>Fithub</h1>
    <h2>Create New Account</h2>

    <!-- Registration Form -->
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
        </div>

        <div class="checkbox">
            <input type="checkbox" required>I have read and agreed with the <a href="#"> Terms & Conditions</a> and <a href="#"> Privacy control</a> guidelines and regulations.
        </div><br>

        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>
    <div class="login">
        <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
    </div>
</div>


    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });


    </script>
</body>
</html>
