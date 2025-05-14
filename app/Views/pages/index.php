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
            📊 Selamat Datang di <span style="color: #FFD700;">SIEDUTA</span>
        </h1>
        <p style="font-size: 1.25rem; line-height: 1.8;">
            Sistem Informasi Edukasi Statistik Terintegrasi <br>Badan Pusat Statistik Kabupaten Tanggamus
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
    <div style="position: absolute; bottom: 0; width: 100%; overflow: hidden; line-height: 0;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100px; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: white;"></path>
        </svg>
    </div>
</div>

<!-- Feature Section -->
<section id="fitur">
    <h2>🔍 Fitur Unggulan</h2>
    <div class="fitur-container">
        <div class="fitur-box">
            <h3>📈 Indikator Strategis</h3>
            <p>Indikator strategis BPS arahkan pembangunan Tanggamus berbasis data akurat</p>
        </div>
        <div class="fitur-box">
            <h3>🏣 Statistik Sektoral</h3>
            <p>BPS membina dinas dan OPD hasilkan data statistik terstandar nasional</p>
        </div>
        <div class="fitur-box">
            <h3>🏅 Desa Cantik</h3>
            <p>Program Desa Cantik tingkatkan pemahaman desa terhadap proses bisnis statistik</p>
        </div>
        <div class="fitur-box">
            <h3>📞 Halo PST</h3>
            <p>Pelayanan Statistik Terpadu BPS permudah akses data bagi seluruh masyarakat</p>
        </div>
    </div>
</section>

<style>
    #fitur {
        background: white;
        color: #333;
        padding: 80px 20px;
        text-align: center;
    }

    #fitur h2 {
        font-size: 2.8rem;
        margin-bottom: 50px;
        font-weight: bold;
    }

    .fitur-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .fitur-box {
        flex: 1 1 250px;
        max-width: 300px;
        padding: 20px;
        box-sizing: border-box;
    }

    .fitur-box h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .fitur-box p {
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        #fitur h2 {
            font-size: 2.2rem;
        }

        .fitur-box {
            max-width: 100%;
        }
    }
</style>

<!-- Carousel Slider -->
<section style="background: linear-gradient(to right, #0f4c81, #1e7bb8); padding: 60px 0; color: #fff;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold; margin-bottom: 40px;">📊 Statistik Terbaru</h2>

    <!-- Outer Container with buttons outside -->
    <div style="position: relative; width: 960px; margin: auto;">

        <!-- Left Button (outside slider) -->
        <button id="prev" style="
            position: absolute;
            top: 50%;
            left: -20px;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            border: none;
            color: white;
            font-size: 1.5rem;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            z-index: 10;
        ">&#10094;</button>

        <!-- Slider Container -->
        <div id="slider-container" style="
            display: flex;
            overflow: hidden;
            width: 900px;
            margin: auto;
        ">
            <div id="slider" style="
                display: flex;
                transition: transform 0.5s ease-in-out;
                gap: 20px;
            ">
                <div class="card-stat">🙋‍♂️<br>Penduduk<br><b>670.367 jiwa</b><br><small>2024</small></div>
                <div class="card-stat">📈<br>Pertumbuhan Penduduk<br><b>1,18 %</b><br><small>2024</small></div>
                <div class="card-stat">➗<br>Rasio Jenis Kelamin<br><b>106,6</b><br><small>2024</small></div>
                <div class="card-stat">🧮<br>IPM<br><b>70,54</b><br><small>2024</small></div>
                <div class="card-stat">📉<br>Penduduk Miskin<br><b>10,28 %</b><br><small>2024</small></div>
                <div class="card-stat">🔍<br>TPT<br><b>3,19 %</b><br><small>2024</small></div>
                <div class="card-stat">💰<br>PDRB Triwulanan (ADHB)<br><b>5.331,58 miliar rupiah</b><br><small>Triwulan IV 2024</small></div>
                <div class="card-stat">📈<br>Pertumbuhan Ekonomi Triwulanan<br><b>-3,02 %</b><br><small>Triwulan IV 2024</small></div>
                <div class="card-stat">💰<br>PDRB Tahunan (ADHB)<br><b>21.197,58 miliar rupiah</b><br><small>2024</small></div>
                <div class="card-stat">📈<br>Pertumbuhan Ekonomi Tahunan<br><b>4,01 %</b><br><small>2024</small></div>
                <div class="card-stat">🪙<br>PDRB per Kapita (ADHB)<br><b>31,62 juta rupiah</b><br><small>2024</small></div>
            </div>
        </div>

        <!-- Right Button (outside slider) -->
        <button id="next" style="
            position: absolute;
            top: 50%;
            right: -20px;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            border: none;
            color: white;
            font-size: 1.5rem;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            z-index: 10;
        ">&#10095;</button>
    </div>

    <!-- Pagination Dots -->
    <div id="dots-container" style="text-align: center; margin-top: 20px;"></div>
</section>

<style>
    .card-stat {
        background: #fff;
        color: #333;
        border-radius: 16px;
        padding: 30px 20px;
        /* tambah padding vertikal */
        text-align: center;
        min-width: 210px;
        max-width: 210px;
        min-height: 180px;
        /* tambahkan tinggi minimum */
        flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-size: 1rem;
        /* sedikit diperbesar */
        line-height: 1.6;
        box-sizing: border-box;
    }


    .dot {
        height: 10px;
        width: 10px;
        margin: 0 5px;
        background-color: #ddd;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .dot.active {
        background-color: #007bff;
    }
</style>

<script>
    const slider = document.getElementById('slider');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    const dotsContainer = document.getElementById('dots-container');

    const totalItems = slider.children.length;
    const totalVisible = 4;
    const cardWidth = 210 + 20;

    let index = 0;
    let autoSlideInterval;

    for (let i = 0; i < totalVisible; i++) {
        const clone = slider.children[i].cloneNode(true);
        slider.appendChild(clone);
    }

    const dots = [];
    for (let i = 0; i < totalItems; i++) {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            index = i;
            updateSlider();
            resetAutoSlide();
        });
        dotsContainer.appendChild(dot);
        dots.push(dot);
    }

    const updateDots = () => {
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index % totalItems);
        });
    };

    const updateSlider = () => {
        slider.style.transition = 'transform 0.5s ease-in-out';
        slider.style.transform = `translateX(-${index * cardWidth}px)`;
        updateDots();

        if (index === totalItems) {
            setTimeout(() => {
                slider.style.transition = 'none';
                index = 0;
                slider.style.transform = `translateX(0)`;
                updateDots();
            }, 500);
        }
    };

    const moveToNext = () => {
        index++;
        updateSlider();
    };

    const moveToPrev = () => {
        if (index <= 0) {
            index = totalItems;
            slider.style.transition = 'none';
            slider.style.transform = `translateX(-${index * cardWidth}px)`;

            setTimeout(() => {
                index--;
                updateSlider();
            }, 20);
        } else {
            index--;
            updateSlider();
        }
    };

    next.addEventListener('click', () => {
        moveToNext();
        resetAutoSlide();
    });

    prev.addEventListener('click', () => {
        moveToPrev();
        resetAutoSlide();
    });

    const startAutoSlide = () => {
        autoSlideInterval = setInterval(moveToNext, 4000);
    };

    const resetAutoSlide = () => {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    };

    startAutoSlide();
</script>

<!-- Section Edukasi Statistik (Carousel Slider) -->
<section id="edukasi-statistik">
    <h2>🎥 Edukasi Statistik</h2>

    <div class="carousel-wrapper">
        <!-- Left Button -->
        <button id="prev-video" class="nav-button">&#10094;</button>

        <!-- Slider Container -->
        <div id="video-slider-container">
            <div id="video-slider">
                <div class="video-card">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/_lW4tjwO8nU" title="Video" frameborder="0" allowfullscreen></iframe>
                    <p>Bagaimana Data Inflasi Dihasilkan?</p>
                </div>
                <div class="video-card">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/sAr29p2XMiU" title="Video" frameborder="0" allowfullscreen></iframe>
                    <p>Modernisasi Statistik Pertanian dengan Data Satelit & AI</p>
                </div>
                <div class="video-card">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/iBQWmQBtZ_w" title="Video" frameborder="0" allowfullscreen></iframe>
                    <p>[RILIS BPS] Rilis Hasil SNLIK, 2 Mei 2025</p>
                </div>
                <div class="video-card">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/L86LTnOeXQE" title="Video" frameborder="0" allowfullscreen></iframe>
                    <p>Mencatat Indonesia - Official Theme Song Sensus Ekonomi 2026</p>
                </div>
                <div class="video-card">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/_lW4tjwO8nU?si=IILESnI4fQioyVNb" title="Video" frameborder="0" allowfullscreen></iframe>
                    <p>Bagaimana Data Inflasi Dihasilkan</p>
                </div>
            </div>
        </div>

        <!-- Right Button -->
        <button id="next-video" class="nav-button">&#10095;</button>
    </div>

    <!-- Dots -->
    <div id="video-dots-container"></div>
</section>

<style>
    #edukasi-statistik {
        background-color: #ffffff;
        /* Putih bersih */
        padding: 80px 20px;
        text-align: center;
    }

    #edukasi-statistik h2 {
        font-size: 2.8rem;
        margin-bottom: 50px;
        font-weight: 600;
        color: #333;
    }

    .carousel-wrapper {
        position: relative;
        max-width: 860px;
        margin: auto;
    }

    .nav-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.3);
        border: none;
        color: white;
        font-size: 1.5rem;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        cursor: pointer;
        z-index: 10;
    }

    #prev-video {
        left: -20px;
    }

    #next-video {
        right: -20px;
    }

    #video-slider-container {
        overflow: hidden;
        width: 100%;
    }

    #video-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 20px;
    }

    .video-card {
        background: linear-gradient(to right, #0f4c81, #1e7bb8);
        border-radius: 16px;
        padding: 20px;
        width: 100%;
        max-width: 400px;
        flex: 0 0 auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        text-align: center;
    }

    .video-card p {
        margin-top: 15px;
        font-size: 1.1rem;
        font-weight: normal;
        color: #fff;
        text-align: center;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    #video-dots-container {
        text-align: center;
        margin-top: 20px;
    }

    .dot {
        height: 10px;
        width: 10px;
        margin: 0 5px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .dot.active {
        background-color: #007bff;
    }

    @media screen and (max-width: 900px) {
        #video-slider-container {
            max-width: 420px;
            margin: auto;
        }

        .video-card {
            max-width: 400px;
        }
    }

    @media (max-width: 600px) {
        .video-card {
            width: 100%;
        }
    }
</style>

<script>
    const videoSlider = document.getElementById('video-slider');
    const nextVideo = document.getElementById('next-video');
    const prevVideo = document.getElementById('prev-video');
    const videoDotsContainer = document.getElementById('video-dots-container');

    const videoItems = videoSlider.children.length;
    const visibleVideoCount = 2;

    // Clone first few items for loop effect
    for (let i = 0; i < visibleVideoCount; i++) {
        const clone = videoSlider.children[i].cloneNode(true);
        videoSlider.appendChild(clone);
    }

    function getVideoCardWidth() {
        const screenWidth = window.innerWidth;
        return screenWidth <= 900 ? 420 : (420 * 2);
    }

    let videoCardWidth = getVideoCardWidth();
    let videoIndex = 0;

    const videoDots = [];
    for (let i = 0; i < videoItems; i++) {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            videoIndex = i;
            updateVideoSlider();
        });
        videoDotsContainer.appendChild(dot);
        videoDots.push(dot);
    }

    const updateVideoDots = () => {
        videoDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === videoIndex % videoItems);
        });
    };

    const updateVideoSlider = () => {
        videoSlider.style.transition = 'transform 0.5s ease-in-out';
        videoSlider.style.transform = `translateX(-${videoIndex * (videoCardWidth / visibleVideoCount)}px)`;
        updateVideoDots();

        if (videoIndex === videoItems) {
            setTimeout(() => {
                videoSlider.style.transition = 'none';
                videoIndex = 0;
                videoSlider.style.transform = `translateX(0)`;
                updateVideoDots();
            }, 500);
        }
    };

    const moveNextVideo = () => {
        videoIndex++;
        updateVideoSlider();
    };

    const movePrevVideo = () => {
        if (videoIndex <= 0) {
            videoIndex = videoItems;
            videoSlider.style.transition = 'none';
            videoSlider.style.transform = `translateX(-${videoIndex * (videoCardWidth / visibleVideoCount)}px)`;

            setTimeout(() => {
                videoIndex--;
                updateVideoSlider();
            }, 20);
        } else {
            videoIndex--;
            updateVideoSlider();
        }
    };

    nextVideo.addEventListener('click', moveNextVideo);
    prevVideo.addEventListener('click', movePrevVideo);
    window.addEventListener('resize', () => {
        videoCardWidth = getVideoCardWidth();
        updateVideoSlider();
    });

    setInterval(moveNextVideo, 5000);
</script>




<!-- Section Edukasi Statistik -->
<!-- <section style="background-color: #f8f9fa; padding: 80px 20px; text-align: center;">
    <h2 style="font-size: 2.5rem; margin-bottom: 50px; font-weight: bold;">🎥 Edukasi Statistik</h2>
    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; max-width: 1100px; margin: auto;">
        <div style="flex: 1; min-width: 300px; max-width: 500px;">
            <iframe width="100%" height="280" src="https://www.youtube.com/embed/_lW4tjwO8nU?si=6IyVses1axgwo6wL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p style="margin-top: 15px; font-weight: bold;">Apa itu Indeks Harga Konsumen?</p>
        </div>
        <div style="flex: 1; min-width: 300px; max-width: 500px;">
            <iframe width="100%" height="280" src="https://www.youtube.com/embed/sAr29p2XMiU?si=BIx7vepOiwNPuzwJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p style="margin-top: 15px; font-weight: bold;">Cara Membaca Grafik Statistik dengan Benar</p>
        </div>
    </div>
</section> -->

<!-- Section Kalender Rilis -->
<!-- <section style="background: white; padding: 80px 20px; text-align: center; color: #333;">
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
</section> -->


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