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
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="form-container">
        <h2>Staff </h2>
        <form action="{{ route('insert.submit') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of birth:</label>
                <input type="date" id="dateofbirth" name="dateofbirth" required>
            </div>
            <div class="input-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="input-group">
                <label for="Mobileno">Mobileno:</label>
                <input type="text" id="Mobileno" name="Mobileno" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>
</html>

