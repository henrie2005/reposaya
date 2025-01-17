<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ftipes - Beli Tiket Pesawat</title>
    <link rel="stylesheet" href="tipes.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    session_start(); 
    ?>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="img/logotipes.png" alt="Logo" height="57px" width="171px">
            </div>
            <div class="links">
                <a href="index.php">Home</a>
                <a href="webpencarian.php">Pencarian</a>
                <a href="webpemesanan.php">Pemesanan</a>
                <a href="weboutput.php">Arsip</a> 
            </div>
            <div class="auth-buttons">
                <?php if (isset($_SESSION['email'])): ?>
                    <span>Welcome, <?php echo $_SESSION['email']; ?></span> 
                    <a href="logout.php">
                        <button>Logout</button>
                    </a>
                <?php else: ?>
                    <a href="weblogin.html">
                        <button>Login</button>
                    </a>
                    <a href="websignup.html">
                        <button>Sign Up</button>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Beli <br> Tiket <br> Pesawat</h1>
        </div>
    </section>

    <section class="promo">
        <h2>Promo Domestik</h2>
        <div class="promo-cards">
            <div class="card">
                <span>Sekali jalan</span>
                <p>Jakarta ➔ Palembang</p>
            </div>
            <div class="card">
                <span>Sekali jalan</span>
                <p>Jakarta ➔ Surabaya</p>
            </div>
            <div class="card">
                <span>Sekali jalan</span>
                <p>Jakarta ➔ Padang</p>
            </div>
            <div class="card">
                <span>Sekali jalan</span>
                <p>Jakarta ➔ Bali</p>
            </div>
        </div>
    </section>

</body>
</html>
