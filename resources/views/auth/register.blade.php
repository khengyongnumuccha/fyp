<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="form">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="data">
                <i class="fa-solid fa-dog"></i>
                <h1 class="name">PawFect <span>Match</span></h1>

                <!-- Name -->
                <label for="name">Username</label>
                <input type="text" id="name" name="name" placeholder="Enter your username" value="{{ old('name') }}" required autofocus>
                <x-input-error :messages="$errors->get('name')" class="error-message" />

                <!-- Email -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                <x-input-error :messages="$errors->get('email')" class="error-message" />

                <!-- Password -->
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <x-input-error :messages="$errors->get('password')" class="error-message" />

                <!-- Confirm Password -->
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />

                <!-- Submit Button -->
                <input type="submit" value="Register">
                
                <!-- Already Registered? -->
                <p class="login-link">
                    Already registered? <a href="{{ route('login') }}">Log in</a>
                </p>
            </div>
        </form>

        <div class="image">
            <img src="image/dog.jpeg" alt="">
        </div>
    </div>
</body>

</html>
