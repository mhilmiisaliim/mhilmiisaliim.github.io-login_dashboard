<?php
session_start();

// Cek login
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f9;
}

/* Navbar */
.navbar {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    padding: 15px 30px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar h2 {
    margin: 0;
}

.navbar a {
    color: white;
    text-decoration: none;
    background: rgba(255,255,255,0.2);
    padding: 8px 15px;
    border-radius: 8px;
    transition: 0.3s;
}

.navbar a:hover {
    background: rgba(255,255,255,0.4);
}

/* Container */
.container {
    padding: 30px;
}

/* Cards */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card h3 {
    margin: 0;
}

.card p {
    color: gray;
}

/* Welcome */
.welcome {
    margin-bottom: 20px;
    font-size: 20px;
}
</style>

</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h2>🚀 Dashboard</h2>
    <a href="logout.php">Logout</a>
</div>

<!-- Content -->
<div class="container">

    <div class="welcome">
        Halo, <b><?php echo $_SESSION['username']; ?></b> 👋
    </div>

    <div class="cards">
        <div class="card">
            <h3>📊 Data</h3>
            <p>Melihat data sistem</p>
        </div>

        <div class="card">
            <h3>👤 Profile</h3>
            <p>Informasi pengguna</p>
        </div>

        <div class="card">
            <h3>⚙️ Settings</h3>
            <p>Pengaturan sistem</p>
        </div>

        <div class="card">
            <h3>📩 Message</h3>
            <p>Pesan masuk</p>
        </div>
    </div>

</div>

</body>
</html>