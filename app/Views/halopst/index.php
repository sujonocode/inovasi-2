<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>BPS Kabupaten Tanggamus</h1>
        <p>Lembaga independen, terpercaya, dan berperan aktif dalam mendukung perumusan kebijakan berbasis data</p>
        <a href="#features" class="btn btn-primary btn-lg">Jelajahi Fitur</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Fitur Kami</h2>
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-4">
                <div class="card-flip" data-flip-card>
                    <div class="card-inner">
                        <div class="card-front icon-box text-center bg-light border d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-file-contract fa-3x text-primary"></i>
                            <h4 class="mt-3">Manajemen Dokumen</h4>
                            <p>Manajemen dokumen, seperti surat keluar, surat masuk, surat keputusan (SK), dan kontrak</p>
                        </div>
                        <div class="card-back icon-box text-center bg-secondary text-white border d-flex flex-column justify-content-center align-items-center">
                            <h4>Detail</h4>
                            <p>Lihat dan kelola semua dokumen resmi di satu tempat dengan aman.</p>
                            <a href="/dokumen" class="btn btn-light mt-2">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card-flip" data-flip-card>
                    <div class="card-inner">
                        <div class="card-front icon-box text-center bg-light border d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-calendar-days fa-3x text-primary"></i>
                            <h4 class="mt-3">Reminder</h4>
                            <p>Pengingat tugas terkait humas, quality gates, BRS dan publikasi, serta lainnya</p>
                        </div>
                        <div class="card-back icon-box text-center bg-secondary text-white border d-flex flex-column justify-content-center align-items-center">
                            <h4>Detail</h4>
                            <p>Notifikasi dan pengingat penting untuk kegiatan yang dijadwalkan.</p>
                            <a href="/humas" class="btn btn-light mt-2">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card-flip" data-flip-card>
                    <div class="card-inner">
                        <div class="card-front icon-box text-center bg-light border d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-calendar-days fa-3x text-primary"></i>
                            <h4 class="mt-3">Reminder</h4>
                            <p>Pengingat tugas terkait humas, quality gates, BRS dan publikasi, serta lainnya</p>
                        </div>
                        <div class="card-back icon-box text-center bg-secondary text-white border d-flex flex-column justify-content-center align-items-center">
                            <h4>Detail</h4>
                            <p>Notifikasi dan pengingat penting untuk kegiatan yang dijadwalkan.</p>
                            <a href="/humas" class="btn btn-light mt-2">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Features Section -->
<section id="features" class="features py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Fitur Kami</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-3">
                <a href="/dokumen" class="text-decoration-none text-dark">
                    <div class="icon-box text-center bg-light border h-100 d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-file-contract"></i>
                        <h4 class="mt-3">Manajemen Dokumen</h4>
                        <p>Manajemen dokumen, seperti surat keluar, surat masuk, surat keputusan (SK), dan kontrak</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="/humas" class="text-decoration-none text-dark">
                    <div class="icon-box text-center bg-light border h-100 d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-calendar-days"></i>
                        <h4 class="mt-3">Reminder</h4>
                        <p>Pengingat tugas terkait humas, quality gates, BRS dan publikasi, serta lainnya</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="/humas" class="text-decoration-none text-dark">
                    <div class="icon-box text-center bg-light border h-100 d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-calendar-days"></i>
                        <h4 class="mt-3">Reminder</h4>
                        <p>Pengingat tugas terkait humas, quality gates, BRS dan publikasi, serta lainnya</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="/humas" class="text-decoration-none text-dark">
                    <div class="icon-box text-center bg-light border h-100 d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-calendar-days"></i>
                        <h4 class="mt-3">Reminder</h4>
                        <p>Pengingat tugas terkait humas, quality gates, BRS dan publikasi, serta lainnya</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll("[data-flip-card]");

        cards.forEach(card => {
            card.addEventListener("click", function() {
                if (window.innerWidth <= 768) {
                    card.classList.toggle("flipped");
                }
            });
        });
    });
</script>