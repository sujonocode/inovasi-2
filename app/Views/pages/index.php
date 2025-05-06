<!-- Main Hero Section -->
<div class="main-content" style="
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #1e3c72, #2a5298);
    color: white;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 60px 20px;
    position: relative;
    text-align: center;
">

    <div style="max-width: 700px;">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px; font-weight: bold;">
            📊 Selamat Datang di <span style="color: #FFD700;">EduStat</span>
        </h1>
        <p style="font-size: 1.25rem; line-height: 1.8;">
            Platform edukatif yang menyajikan informasi statistik secara visual, interaktif, dan mudah dipahami untuk semua kalangan.
        </p>
        <a href="#fitur" style="
            margin-top: 40px;
            display: inline-block;
            background-color: #FFD700;
            color: #1e3c72;
            padding: 14px 30px;
            font-weight: bold;
            border-radius: 10px;
            text-decoration: none;
            transition: background 0.3s, transform 0.2s;
        " onmouseover="this.style.backgroundColor='#e6c200'; this.style.transform='scale(1.05)'" onmouseout="this.style.backgroundColor='#FFD700'; this.style.transform='scale(1)'">
            Jelajahi Sekarang
        </a>
    </div>

    <!-- Wave Divider -->
    <div style="position: absolute; bottom: 0; width: 100%; overflow: hidden; line-height: 0;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100px; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: white;"></path>
        </svg>
    </div>
</div>

<!-- Feature Section -->
<section id="fitur" style="
    background: white;
    color: #333;
    padding: 80px 20px;
    text-align: center;
">
    <h2 style="font-size: 2.8rem; margin-bottom: 50px; font-weight: bold;">
        🔍 Fitur Unggulan
    </h2>
    <div style="
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
        max-width: 1100px;
        margin: 0 auto;
    ">
        <div style="flex: 1; min-width: 250px; max-width: 300px;">
            <h3 style="font-size: 1.5rem; margin-bottom: 10px;">📈 Visualisasi Data</h3>
            <p style="font-size: 1rem; line-height: 1.6;">
                Grafik interaktif yang memudahkan pengguna memahami tren statistik.
            </p>
        </div>
        <div style="flex: 1; min-width: 250px; max-width: 300px;">
            <h3 style="font-size: 1.5rem; margin-bottom: 10px;">🎓 Materi Edukatif</h3>
            <p style="font-size: 1rem; line-height: 1.6;">
                Pembelajaran statistik dasar hingga lanjutan dengan ilustrasi dan studi kasus.
            </p>
        </div>
        <div style="flex: 1; min-width: 250px; max-width: 300px;">
            <h3 style="font-size: 1.5rem; margin-bottom: 10px;">🧠 Quiz & Latihan</h3>
            <p style="font-size: 1rem; line-height: 1.6;">
                Uji pemahaman dengan soal-soal latihan dan penilaian otomatis.
            </p>
        </div>
    </div>
</section>

<!-- Section Statistik Mirip Gambar -->
<section style="background: linear-gradient(to right, #0f4c81, #1e7bb8); padding: 60px 0; color: #fff;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold; margin-bottom: 40px;">📊 Statistik Terbaru</h2>

    <div style="position: relative; max-width: 1000px; margin: auto; overflow: hidden;">
        <!-- Slider wrapper -->
        <div id="slider" style="
      display: flex;
      transition: transform 0.5s ease-in-out;
      gap: 20px;
    ">
            <!-- CARD -->
            <div class="card-stat">
                <div class="icon">💰</div>
                <div class="label">Gini<br>Rasio</div>
                <div class="value">0,381</div>
                <div class="unit"></div>
                <div class="date">September 2024</div>
            </div>

            <div class="card-stat">
                <div class="icon">🏠</div>
                <div class="label">IPM<br>(UHH LF SP2020)</div>
                <div class="value">75,02</div>
                <div class="unit"></div>
                <div class="date">2024</div>
            </div>

            <div class="card-stat">
                <div class="icon">🌐</div>
                <div class="label">Nilai<br>Ekspor</div>
                <div class="value">23.247,3</div>
                <div class="unit">Juta US$</div>
                <div class="date">Maret 2025</div>
            </div>

            <div class="card-stat">
                <div class="icon">📦</div>
                <div class="label">Nilai<br>Impor</div>
                <div class="value">18.920,1</div>
                <div class="unit">Juta US$</div>
                <div class="date">Maret 2025</div>
            </div>

            <div class="card-stat">
                <div class="icon">💹</div>
                <div class="label">Nilai Neraca<br>Perdagangan</div>
                <div class="value">4.329,1</div>
                <div class="unit">Juta US$</div>
                <div class="date">Maret 2025</div>
            </div>
        </div>
    </div>

    <!-- Pagination Dots -->
    <div style="text-align: center; margin-top: 20px;">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

<style>
    .card-stat {
        background: #fff;
        color: #333;
        border-radius: 16px;
        padding: 30px 20px;
        text-align: center;
        min-width: 220px;
        flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .icon {
        font-size: 2rem;
        color: #007bff;
        margin-bottom: 10px;
    }

    .label {
        font-weight: bold;
        font-size: 1rem;
        color: #003366;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .value {
        font-size: 1.8rem;
        font-weight: bold;
    }

    .unit {
        font-size: 0.9rem;
        color: #777;
    }

    .date {
        margin-top: 10px;
        font-size: 0.85rem;
        color: #888;
    }

    .dot {
        height: 10px;
        width: 10px;
        margin: 0 5px;
        background-color: #ddd;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .dot.active {
        background-color: #007bff;
    }
</style>

<script>
    const slider = document.getElementById('slider');
    const dots = document.querySelectorAll('.dot');
    let index = 0;

    function showSlide(i) {
        const cardWidth = 240; // Width + margin
        slider.style.transform = `translateX(-${i * cardWidth}px)`;

        dots.forEach(dot => dot.classList.remove('active'));
        dots[i % dots.length].classList.add('active');
    }

    setInterval(() => {
        index = (index + 1) % dots.length;
        showSlide(index);
    }, 3000);
</script>

<!-- Section Edukasi Statistik -->
<section style="background-color: #f8f9fa; padding: 80px 20px; text-align: center;">
    <h2 style="font-size: 2.5rem; margin-bottom: 50px; font-weight: bold;">🎥 Edukasi Statistik</h2>
    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; max-width: 1100px; margin: auto;">
        <div style="flex: 1; min-width: 300px; max-width: 500px;">
            <iframe width="100%" height="280" src="https://www.youtube.com/embed/VIDEOLINK1" frameborder="0" allowfullscreen></iframe>
            <p style="margin-top: 15px; font-weight: bold;">Apa itu Indeks Harga Konsumen?</p>
        </div>
        <div style="flex: 1; min-width: 300px; max-width: 500px;">
            <iframe width="100%" height="280" src="https://www.youtube.com/embed/VIDEOLINK2" frameborder="0" allowfullscreen></iframe>
            <p style="margin-top: 15px; font-weight: bold;">Cara Membaca Grafik Statistik dengan Benar</p>
        </div>
    </div>
</section>
<!-- Section Kalender Rilis -->
<section style="background: white; padding: 80px 20px; text-align: center; color: #333;">
    <h2 style="font-size: 2.5rem; margin-bottom: 40px; font-weight: bold;">🗓️ Jadwal Rilis Data</h2>
    <p style="max-width: 700px; margin: auto; margin-bottom: 40px;">Jangan lewatkan rilis resmi data statistik dari BPS. Berikut beberapa jadwal penting yang akan datang:</p>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
        <div style="border-left: 4px solid #2a5298; background: #f1f3f5; padding: 20px; max-width: 400px; text-align: left; border-radius: 8px;">
            <h4 style="margin-bottom: 10px;">15 Mei 2025</h4>
            <p>Rilis Data Pertumbuhan Ekonomi Triwulan I-2025</p>
        </div>
        <div style="border-left: 4px solid #2a5298; background: #f1f3f5; padding: 20px; max-width: 400px; text-align: left; border-radius: 8px;">
            <h4 style="margin-bottom: 10px;">1 Juni 2025</h4>
            <p>Rilis Inflasi Nasional Mei 2025</p>
        </div>
    </div>
</section>


<script>
    function generateWhatsAppLink() {
        // Get the name, gender, and message values from the form
        const form = document.getElementById('waForm');
        const nama = document.getElementById('nama').value;
        const jk = document.getElementById('jk').value;
        const pesan = document.getElementById('pesan').value;

        // Check if fields are filled
        if (!nama || !jk || !pesan) {
            // Show the flash message using Bootstrap modal
            showFlashMessage('Lengkapi semua isian!');
            return;
        }

        // Generate the WhatsApp link with encoded text
        const message = `Nama            : ${nama}\nJenis Kelamin: ${jk}\n\n${pesan}`;
        const whatsappLink = `https://wa.me/6282337039320?text=${encodeURIComponent(message)}`;

        // Open the link in a new tab
        window.open(whatsappLink, '_blank');

        // Clear the form
        form.reset();
    }

    // Function to show flash message in the modal
    function showFlashMessage(message) {
        // Set the message text in the modal
        document.getElementById('flashMessageText').textContent = message;

        // Show the modal
        var myModal = new bootstrap.Modal(document.getElementById('flashMessageModal'));
        myModal.show();
    }

    // Check if there's a success message in PHP flashdata
    <?php if (session()->getFlashdata('success')): ?>
        showFlashMessage('<?= session()->getFlashdata('success') ?>');
    <?php endif; ?>
</script>

<script>
    // Smooth Scroll Script
    document.querySelector('.btn').addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#features').scrollIntoView({
            behavior: 'smooth'
        });
    });

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

    // // Active nav
    // document.addEventListener("DOMContentLoaded", function() {
    //     const navLinks = document.querySelectorAll(".nav-link");

    //     // Get the current URL
    //     const currentURL = window.location.href;

    //     navLinks.forEach(link => {
    //         // Check if the href of the link matches the current URL
    //         if (link.href === currentURL) {
    //             link.classList.add("active");
    //         }
    //     });
    // });
</script>