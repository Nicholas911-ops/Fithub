
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fithub - Login</title>
    <!-- Add Font Awesome CSS -->
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

.login-container {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative; /* Position relative for the password toggle icon */
    text-align: center; /* Center align the content */
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input {
    width: calc(100% - 32px); /* Adjusted width for the icon */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.password-toggle {
    position: absolute;
    top: 37.3%;
    right: 37px;
    transform: translateY(-50%);
    cursor: pointer;
    color: #777;
}

.form-group input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    width: 100%; /* Adjust button width */
}

.form-group input[type="submit"]:hover {
    background-color: #0056b3;
}

.forgot-password {
    text-align: right;
    font-size: 14px;
    margin-bottom: 10px;
}

.forgot-password a {
    color: #007bff;
    text-decoration: none;
}

.create-account {
    font-size: 14px;
}

.create-account a {
    color: #007bff;
    text-decoration: none;
}

/* Adjust button styles */
.Google-btn, .Facebook-btn {
    background-color: green; /* Set initial background color */
    color: white;
    padding: 8px;
    border: none;
    border-radius: 4px;
    width: 100%;
    margin-bottom: 10px; /* Add margin bottom to separate buttons */
}
.Facebook-btn{
    background-color: #363636;
}
.Google-btn:hover {
    color: yellow;
}

.Facebook-btn:hover {
    color: red;
}

    </style>
</head>
<body>
        <div class="login-container">
            <h2>Login to Fithub</h2>
            <form action="{{ route('login.submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="forgot-password">
                <a href="{{ route('forgot-password') }}">Forgot password?</a>
            </div>
            <div class="create-account">
                <p>Don't have an account? <a href="{{ route('register') }}">Create account</a></p>
            </div>
      
  <!-- Or Separator -->
 <p style="text-align: center;">Or</p>

<!-- Google Sign-In button -->
  <div class="form-group">
     <button class="Google-btn" onclick="signInWithGoogle()" >Continue with Google</button>
 </div>

 <!-- Facebook Sign-In button -->
    <div class="form-group">
     <button class="Facebook-btn" onclick="signInWithFacebook()" >Continue with Facebook</button>
    </div>

  </div>


    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // Toggle eye icon
            this.classList.toggle('fa-eye-slash');
        });
                // Function to handle Google Sign-In
                function signInWithGoogle() {
            // Implement Google Sign-In logic here
            // This typically involves calling the Google Sign-In SDK
        }

        // Function to handle Facebook Sign-In
        function signInWithFacebook() {
            // Implement Facebook Sign-In logic here
            // This typically involves calling the Facebook SDK
        }

    </script>
</body>
</html>