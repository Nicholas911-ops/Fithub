<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="{{ asset('css/passwordresetform.css') }}">
</head>
<body>
    <div class="container">
        <div class="reset-form">
          <h1>Fithub</h1>
            <h1>Reset Your Password</h1>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group password-field">
                    <label for="password">New Password:</label>
                    <input type="password" name="password" id="password" required>
                    <span class="eye-icon" id="togglePassword1">&#128065;</span>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group password-field">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                    <span class="eye-icon" id="togglePassword2">&#128065;</span>
                    @error('password_confirmation')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn">Reset Password</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword1').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '🙈';
        });

        document.getElementById('togglePassword2').addEventListener('click', function () {
            const passwordField = document.getElementById('password_confirmation');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '🙈';
        });
    </script>
</body>
</html>
