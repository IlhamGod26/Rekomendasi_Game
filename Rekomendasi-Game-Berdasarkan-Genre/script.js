document.addEventListener('DOMContentLoaded', () => {
    // Ambil elemen tombol dan body
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    
    // Cek local storage untuk preferensi Dark Mode
    const isDarkMode = localStorage.getItem('darkMode') === 'enabled';

    // 1. Muat preferensi Dark Mode dari local storage saat halaman dimuat
    if (isDarkMode) {
        body.classList.add('dark-mode');
        darkModeToggle.textContent = 'Light Mode'; // Ganti teks tombol
    }

    // 2. Tambahkan event listener untuk tombol Dark Mode
    darkModeToggle.addEventListener('click', () => {
        // Toggle class 'dark-mode' pada body
        body.classList.toggle('dark-mode');

        // Simpan preferensi di local storage dan perbarui teks tombol
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('darkMode', 'enabled');
            darkModeToggle.textContent = 'Light Mode';
        } else {
            localStorage.setItem('darkMode', 'disabled');
            darkModeToggle.textContent = 'Dark Mode';
        }
    });
});