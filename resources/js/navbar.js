document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");

    if (!navbar) return; // Cegah error jika navbar tidak ditemukan

    const isHomePage = window.location.pathname === "/"; // Cek apakah di halaman "/"

    if (isHomePage) {
        navbar.classList.add("transparent"); // Tambahkan transparansi hanya di halaman "/"
    } else {
        navbar.classList.add("scrolled"); // Langsung beri background di halaman lain
    }

    // Event scroll hanya untuk halaman "/"
    if (isHomePage) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
                navbar.classList.remove("transparent");
            } else {
                navbar.classList.add("transparent");
                navbar.classList.remove("scrolled");
            }
        });
    }
});
