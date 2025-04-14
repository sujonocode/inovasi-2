</div>
</body>

<!-- Footer -->
<footer>
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
</footer>

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