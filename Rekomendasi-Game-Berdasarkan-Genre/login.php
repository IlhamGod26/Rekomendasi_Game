<?php
// Selalu mulai session di awal skrip [cite: 14, 131]
session_start();

// Data user sederhana (Harusnya disimpan di database dengan hash, tetapi untuk contoh ini menggunakan array asosiatif)
// Array asosiatif menggunakan kunci (key) berupa string [cite: 186]
$users = [
    'duan' => '114', 
    'user' => 'password'
];

// 1. Jika user sudah login (ada $_SESSION['username']), redirect ke dashboard.php
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}

// 2. Tangani pesan dari query string menggunakan $_GET
$pesan_notifikasi = '';
if (isset($_GET['pesan'])) { // $_GET digunakan untuk mengambil data dari URL setelah tanda tanya [cite: 101]
    if ($_GET['pesan'] == 'error') {
        $pesan_notifikasi = 'Username atau password salah!';
    } elseif ($_GET['pesan'] == 'logout') {
        $pesan_notifikasi = 'Anda telah berhasil logout.';
    } elseif ($_GET['pesan'] == 'belum_login') {
        $pesan_notifikasi = 'Anda harus login untuk mengakses halaman dashboard!';
    }
}

// 3. Tangani form submission menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Memeriksa metode HTTP yang digunakan [cite: 163]
    // Ambil data dari form menggunakan superglobal $_POST [cite: 110, 111]
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validasi login
    if (isset($users[$username]) && $users[$username] === $password) {
        // Login Berhasil: Simpan username ke dalam superglobal $_SESSION [cite: 19, 23]
        $_SESSION['username'] = $username;
        
        // Redirect ke dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        // Login Gagal: Redirect dengan pesan error melalui query string [cite: 99]
        header('Location: login.php?pesan=error');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Game Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1 class="title">Login Game Portal</h1>
    </header>

    <main class="main">
        <section class="section">
            <h2 class="section-title">Login</h2>
            <?php if ($pesan_notifikasi): ?>
                <?php $color = (strpos($pesan_notifikasi, 'salah') !== false || strpos($pesan_notifikasi, 'harus login') !== false) ? 'red' : 'green'; ?>
                <p class="text" style="color: <?php echo $color; ?>;"><?php echo $pesan_notifikasi; ?></p>
            <?php endif; ?>
            
            <form method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p class="text">© 2025 Game Portal</p>
    </footer>
</body>
</html>