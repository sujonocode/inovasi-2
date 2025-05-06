</div>
</body>
<footer class="bg-dark text-light pt-5 pb-4">
    <div class="container">
        <div class="row">

            <!-- Logo & Tentang -->
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="/assets/image/sieduta.png" alt="Logo SIEDUTA" style="height:80px; margin-right: 10px;">
                    <h6 class="fw-bold mb-0" style="font-style: italic; text-align: left;">
                        SISTEM INFORMASI<br>EDUKASI STATISTIK
                    </h6>
                </div>
                <p class="text-light text-start">
                    SIEDUTA, website yang dikembangkan oleh BPS Kabupaten Tanggamus, bertujuan meningkatkan literasi statistik dan memperkuat pembinaan statistik sektoral untuk pembangunan yang lebih terarah
                </p>
            </div>

            <!-- Navigasi Cepat -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold text-start">Navigasi Cepat</h6>
                <ul class="list-unstyled text-start">
                    <li><a href="/" class="text-light text-decoration-none">Beranda</a></li>
                    <li><a href="/dokumen" class="text-light text-decoration-none">Indikator Strategis</a></li>
                    <li><a href="/humas" class="text-light text-decoration-none">Statistik Sektoral</a></li>
                    <li><a href="/kontak" class="text-light text-decoration-none">Desa Cantik</a></li>
                    <li><a href="/kontak" class="text-light text-decoration-none">Halo PST</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold text-start">Kontak Kami</h6>
                <p class="text-light mb-1 text-start"><i class="fas fa-map-marker-alt me-2"></i>Jl. Ir. Hi. Juanda No.10, Tanggamus</p>
                <p class="text-light mb-1 text-start"><i class="fas fa-envelope me-2"></i>bps1802@bps.go.id</p>
                <p class="text-light mb-1 text-start"><i class="fas fa-phone me-2"></i>(0728) 21116</p>
                <!-- Media Sosial (Opsional) -->
                <div class="mt-3 text-start">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-light" style="border-width: 1px;">

        <div class="text-center text-light">
            Hak Cipta &copy; <span id="year"></span> Badan Pusat Statistik Kabupaten Tanggamus
        </div>
    </div>
</footer>

<!-- Tahun Otomatis -->
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>

<!-- Footer -->
<!-- <footer>
    <div class="container">
        <p style="margin: 0px;">&copy; 2025. Made with
            <i class="fa-solid fa-heart" style="background: linear-gradient(to right, #6a11cb, #2575fc); 
            font-size: 1.2rem;
            -webkit-background-clip: text; 
            -moz-background-clip: text; 
            -o-background-clip: text;
            background-clip: text; 
            color: transparent;"></i>
            by Tim TI BPS Kabupaten Tanggamus
        </p>
    </div>
</footer> -->

<script>
    // Ensure click toggles dropdowns on all devices
    document.addEventListener('DOMContentLoaded', () => {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent event bubbling
                const menu = this.querySelector('.dropdown-menu');
                const isVisible = menu.classList.contains('show');

                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('show'));

                // Toggle the current dropdown menu
                if (!isVisible) {
                    menu.classList.add('show');
                } else {
                    menu.classList.remove('show');
                }
            });
        });

        // Close dropdown if clicked outside
        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.remove('show'));
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const currentPath = window.location.pathname.replace(/\/$/, ""); // Remove trailing slash
        const navLinks = document.querySelectorAll(".nav-link, .dropdown-item");

        // Route mappings for dropdowns and their submenus
        const routeMappings = {
            "/surat_keluar": {
                dropdown: "dokumenDropdown",
                submenu: "surat_keluar/manage"
            },
            "/surat_masuk": {
                dropdown: "dokumenDropdown",
                submenu: "surat_masuk/manage"
            },
            "/sk": {
                dropdown: "dokumenDropdown",
                submenu: "sk/manage"
            },
            "/kontrak": {
                dropdown: "dokumenDropdown",
                submenu: "kontrak/manage"
            },
            "/humas": {
                dropdown: "humasDropdown",
                submenu: "humas/manage"
            },
            "/quality_gates": {
                dropdown: "humasDropdown",
                submenu: "quality_gates/manage"
            },
            "/publikasi": {
                dropdown: "humasDropdown",
                submenu: "publikasi/manage"
            },
            "/lainnya": {
                dropdown: "humasDropdown",
                submenu: "lainnya/manage"
            }
        };

        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname.replace(/\/$/, "");

            // Exact match: Highlight the submenu link
            if (currentPath === linkPath) {
                link.classList.add("active");
            }

            // Handle `create`, `edit/{id}`, and `manage` for correct dropdown + submenu activation
            Object.keys(routeMappings).forEach(route => {
                if (currentPath.startsWith(route) || currentPath.match(new RegExp(`^${route}/edit/\\d+$`))) {
                    const {
                        dropdown,
                        submenu
                    } = routeMappings[route];

                    // Activate dropdown menu
                    document.getElementById(dropdown)?.classList.add("active");

                    // Activate the submenu
                    document.querySelectorAll(".dropdown-item").forEach(item => {
                        if (item.href.includes(submenu) || item.href.includes(route)) {
                            item.classList.add("active");
                        }
                    });
                }
            });
        });

        // Special handling for Profile & Admin Dashboard in User Dropdown
        if (currentPath === "/profile" || currentPath === "/admin_dashboard") {
            document.getElementById("userDropdown")?.classList.add("active");

            document.querySelectorAll(".dropdown-item").forEach(item => {
                if (item.href.includes("profile") && currentPath === "/profile") {
                    item.classList.add("active");
                }
                if (item.href.includes("admin_dashboard") && currentPath === "/admin_dashboard") {
                    item.classList.add("active");
                }
            });
        }
    });
</script>


</html>