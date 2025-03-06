<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="data">
                <i class="fa-solid fa-dog"></i>
                <h1 class="name">PawFect <span>Match</span></h1>
                
                <!-- Email Address -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="error-message" />
                
                <!-- Password -->
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <x-input-error :messages="$errors->get('password')" class="error-message" />
                
                <!-- Remember Me -->
                <div class="remember-me">
                    <input type="checkbox" id="remember_me" name="remember">
                    <label for="remember_me">Remember Me</label>
                </div>
                
                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">Forgot your password?</a>
                @endif
                
                <!-- Submit Button -->
                <input type="submit" value="Log In">
            </div>
        </form>

        <div class="image">
            <img src="image/dog.jpeg" alt="">
        </div>
    </div>
</body>
</html>
