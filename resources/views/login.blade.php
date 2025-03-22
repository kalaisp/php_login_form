<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic styling for body */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container for the form */
.form-container {
    background-color: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

/* Title styling */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Input groups styling */
.input-group {
    margin-bottom: 20px;
}

.input-group label {
    font-size: 14px;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

/* Button styling */
.btn {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049;
}

/* Register link styling */
.register-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.register-link a {
    color: #4CAF50;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

        </style>
</head>
<body>
    @if(session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
@endif
    <div class="form-container">
        <h2>Login</h2>
        <form  method="POST" action="{{ route('login.submit') }}">
           @csrf
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

            </div>

            <button type="submit" class="btn">Login</button>
        </form>
        <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
    @if(session('error'))
    <script>
        window.onload = function() {
            alert("{{ session('error') }}");
        };
    </script>

@endif
</body>
</html>
