
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
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

/* Login link styling */
.login-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.login-link a {
    color: #4CAF50;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <?php

    if (isset($_SESSION['success'])) {
        echo '<p style="color:green">' . $_SESSION['success'] . "</p>";
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['error'])) {
        echo '<p style="color:red">' . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>
    <div class="form-container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>
</html>

