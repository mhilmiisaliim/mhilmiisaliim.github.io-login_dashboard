<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box {
    background: white;
    padding: 40px;
    border-radius: 15px;
    width: 300px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    text-align: center;
}

.login-box h2 {
    margin-bottom: 20px;
}

.input-box {
    margin-bottom: 15px;
    text-align: left;
}

.input-box label {
    font-size: 14px;
}

.input-box input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    transition: 0.3s;
}

.input-box input:focus {
    border-color: #4facfe;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #4facfe;
    color: white;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #00c6ff;
}

.error {
    color: red;
    margin-top: 10px;
    font-size: 14px;
}

.footer {
    margin-top: 15px;
    font-size: 12px;
    color: gray;
}
</style>

</head>
<body>

<div class="login-box">
    <h2>🔐 Login</h2>

    <form method="POST" action="proses_login.php">
        
        <div class="input-box">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <?php
    if(isset($_GET['error'])){
        echo "<div class='error'>Username atau Password salah!</div>";
    }
    ?>

    <div class="footer">
        © 2026 - Login System
    </div>
</div>

</body>
</html>