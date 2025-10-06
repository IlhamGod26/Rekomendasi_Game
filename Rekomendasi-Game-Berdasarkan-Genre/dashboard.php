<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php?pesan=belum_login');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Game Portal</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <header class="header">
        <h1 class="title">Game Portal 🎮</h1>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#genre" class="nav-link">Genre</a></li>
                <li class="nav-item"><a href="#populer" class="nav-link">Game Populer</a></li>
                <li class="nav-item"><a href="#kontak" class="nav-link">Kontak</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            </ul>
        </nav>
        <p class="text">Halo, <?php echo htmlspecialchars($username); ?>!</p>
        <button id="darkModeToggle" class="btn btn-primary dark-mode-btn">Dark Mode</button>
    </header>

    <main class="main">
        <section id="beranda" class="section welcome">
            <h2 class="section-title">Selamat Datang</h2>
            <p class="text">Website ini menampilkan daftar genre dan game populer yang sedang tren.</p>
        </section>

        <section id="genre" class="section">
            <h2 class="section-title">Genre Game</h2>
            <div class="filter-buttons">
                <button class="btn btn-primary filter-btn" data-genre="all">All</button>
                <button class="btn btn-primary filter-btn" data-genre="fps">FPS</button>
                <button class="btn btn-primary filter-btn" data-genre="moba">MOBA</button>
                <button class="btn btn-primary filter-btn" data-genre="rpg">RPG</button>
            </div>
            <ul class="genre-list">
                <li class="genre-item"><a href="#fps" class="nav-link">FPS</a></li>
                <li class="genre-item"><a href="#moba" class="nav-link">MOBA</a></li>
                <li class="genre-item"><a href="#rpg" class="nav-link">RPG</a></li>
            </ul>
        </section>

        <section id="fps" class="section game-section">
            <h2 class="section-title">Daftar Game FPS</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/ilRScbM0RtG3j2nGpFEKRl29N-Nkfs7chk5wgSlZ8ejB5KiH5H5czGHMs0CsmRF0IJz7gCKAJw=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Valorant" class="card-img">
                    <h3 class="card-title"><b>• Valorant</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/4VJA8NcueJgKJG5OYwCgcMFXzD6A7qU6Nk86LKT6Zqvz4s3EYwSia4ncPoxDxTQO377KpKciSJ8=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Counter Strike 2" class="card-img">
                    <h3 class="card-title"><b>• Counter Strike 2</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/2cMrqzT9jm_gn9VNb33mEu__n5d6LvWQHMdjJQkz60LxxkR5b-ioVokmO_NK9yPhfOQGOEHpOg=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Call of Duty: Warzone" class="card-img">
                    <h3 class="card-title"><b>• Call of Duty: Warzone</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/wJjV_T57AIyhtKKgY1GjuvForXN7IpDXwnpbFQptIJ7FjkBB1Kz8SF0RF9C86MEUo4JBrkP4AcM=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Apex Legends" class="card-img">
                    <h3 class="card-title"><b>• Apex Legends</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/RaStDh0pMIggN_4tQ4mkJxTf18L5NjD0Rq19fDJ0NwQPYx9r__ELYCCIiVxZIPuGe6X4-MHoq7o=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Overwatch 2" class="card-img">
                    <h3 class="card-title"><b>• Overwatch 2</b></h3>
                </div>
            </div>
        </section>

        <section id="moba" class="section game-section">
            <h2 class="section-title">Daftar Game MOBA</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/PF1rZs4nSiipiSzcnze7kz9LCbX4qK3uoDNPEMyV_4u89_sGzdfCVNMy9yGSVY4Scuz7Cujbts4=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Mobile Legends" class="card-img">
                    <h3 class="card-title"><b>• Mobile Legends</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/TJ0klyMkeKSw22EPOqqGcQgwNLB-PATzH-tvYFD9tnLtKzN3B42nH5UBVdWlnJbBxEyZctjClA=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Dota 2" class="card-img">
                    <h3 class="card-title"><b>• Dota 2</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/xhsuOHMIs9dQFvD6oh2T9IRO63PS52Jo1XuZ43hLErsbwyQqowvmkRoZkcEDB76RPw1drjTKjg=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo League of Legends" class="card-img">
                    <h3 class="card-title"><b>• League of Legends</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/MdUGgERPQdbYj6SrPCrkthDAOlWyP4hBSAYXo6gobhZY6g4KSnfZK_lccO2PcI2l0OhNhTN_ZA=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Smite" class="card-img">
                    <h3 class="card-title"><b>• Smite</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/VRwXKVbEg7HVYyV-iK6VnrCDRjQASHlasY2fNiGTtMom5LY0mJMddZp4ZOQrp90gCehYRN09nQ=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Arena of Valor" class="card-img">
                    <h3 class="card-title"><b>• Arena of Valor</b></h3>
                </div>
            </div>
        </section>

        <section id="rpg" class="section game-section">
            <h2 class="section-title">Daftar Game RPG</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg" width="100" alt="Cover The Witcher 3" class="card-img">
                    <h3 class="card-title"><b>• The Witcher 3</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/cpVR6G7RYTexNxUFXFQl0acHbA7D7TZaPEfhpAvIUjH15ZPlIlhrlLrJNtkVWBBp-NXCpBM3wg=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Final Fantasy XV" class="card-img">
                    <h3 class="card-title"><b>• Final Fantasy XV</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/GnCB1_BpJTWfd0MQAqfdL9VRMrefCQMYge0CcpblcfwdUIIXcm7lCgIfRPldOPZ-TxQmEtYGYQ=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Genshin Impact" class="card-img">
                    <h3 class="card-title"><b>• Genshin Impact</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/En4kJXSswCXVgRgMGIBXRctowZ1fOWrBHqQMclYmuByBq49jP8CP2SF_3wM8NeA8C2dEKZRF3g=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Skyrim" class="card-img">
                    <h3 class="card-title"><b>• Skyrim</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/3Hn6vd9ECmVadeGtNozTmXmqBmIj5KM140FWags16tE_VAM0uXRPN6ls7amlIr73K9y3bozG3A=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Persona 5" class="card-img">
                    <h3 class="card-title"><b>• Persona 5</b></h3>
                </div>
            </div>
        </section>

        <section id="populer" class="section game-section">
            <h2 class="section-title">10 Game Populer Saat Ini</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/ZX8-jz57WEEz-sENeyBHCX3tTPoHc-xFIBfSt3pS7qOMOgCIOCbpM7xwi1Fg50ULDEZEAC1a=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Cover Assassin’s Creed: Shadows" class="card-img">
                    <h3 class="card-title"><b>1. Assassin’s Creed: Shadows</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/xhsuOHMIs9dQFvD6oh2T9IRO63PS52Jo1XuZ43hLErsbwyQqowvmkRoZkcEDB76RPw1drjTKjg=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo League of Legends" class="card-img">
                    <h3 class="card-title"><b>2. League of Legends</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/ilRScbM0RtG3j2nGpFEKRl29N-Nkfs7chk5wgSlZ8ejB5KiH5H5czGHMs0CsmRF0IJz7gCKAJw=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Valorant" class="card-img">
                    <h3 class="card-title"><b>3. Valorant</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/GnCB1_BpJTWfd0MQAqfdL9VRMrefCQMYge0CcpblcfwdUIIXcm7lCgIfRPldOPZ-TxQmEtYGYQ=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Genshin Impact" class="card-img">
                    <h3 class="card-title"><b>4. Genshin Impact</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/wJjV_T57AIyhtKKgY1GjuvForXN7IpDXwnpbFQptIJ7FjkBB1Kz8SF0RF9C86MEUo4JBrkP4AcM=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Apex Legends" class="card-img">
                    <h3 class="card-title"><b>5. Apex Legends</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/CrXR64lWhUcx-nS5Z51e61NYBA8Qp52-qxlY4vxBUHnqSZWUXwrvHrBl9OFA_dXcRLw9AqP4=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Fortnite" class="card-img">
                    <h3 class="card-title"><b>6. Fortnite</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/2cMrqzT9jm_gn9VNb33mEu__n5d6LvWQHMdjJQkz60LxxkR5b-ioVokmO_NK9yPhfOQGOEHpOg=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Call of Duty: Warzone" class="card-img">
                    <h3 class="card-title"><b>7. Call of Duty: Warzone</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/4VJA8NcueJgKJG5OYwCgcMFXzD6A7qU6Nk86LKT6Zqvz4s3EYwSia4ncPoxDxTQO377KpKciSJ8=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Counter Strike 2" class="card-img">
                    <h3 class="card-title"><b>8. Counter Strike 2</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/DwHLFYql7VlpqCnnBHxNwykWurS6_6mE-5WY7IzaparI5QboaMpLN1LFbEEB-O7k8yE8kQGhhA=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Cover Black Myth: Wukong" class="card-img">
                    <h3 class="card-title"><b>9. Black Myth: Wukong</b></h3>
                </div>
                <div class="card">
                    <img src="https://yt3.googleusercontent.com/AccTaUWcNmW_rnbDb-11MffeHxbiEPTyYA16mhgg704gja1ST4CCffDZr9D9b9WMYhuKxiIEFA=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" width="100" alt="Logo Helldivers 2" class="card-img">
                    <h3 class="card-title"><b>10. Helldivers 2</b></h3>
                </div>
            </div>
        </section>

        <section id="kontak" class="section">
            <h2 class="section-title">Kontak</h2>
            <p class="text">Website ini dibuat oleh <b>IlhamGod</b>.</p>
            <p><a href="mailto:ridwanali731@gmail.com" class="btn btn-primary">ridwanali731@gmail.com</a></p>
        </section>
    </main>

    <footer class="footer">
        <p class="text">© 2025 Game Portal</p>
        <p class="text">Referensi desain:
            <a href="https://dribbble.com/tags/game_website" target="_blank" class="nav-link">Dribbble - Game Website</a>
        </p>
    </footer>

    <script src="script.js"></script>
</body>
</html>