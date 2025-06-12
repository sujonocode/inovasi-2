<style>
    .sdi-section {
        background: linear-gradient(to right, #1e3c72, #2a5298);
        color: white;
        padding: 60px 20px;
        border-radius: 20px;
    }

    .sdi-section h2 {
        font-weight: 800;
        color: #FFD700;
        margin-bottom: 25px;
    }

    .sdi-description {
        text-align: center;
        max-width: 750px;
        margin: 0 auto 40px auto;
        font-size: 1.1rem;
        color: #f1f1f1;
    }

    .flow-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 40px;
    }

    .flow-step {
        text-align: center;
        max-width: 200px;
        transition: transform 0.3s;
        flex: 1;
        text-decoration: none;
        color: inherit;
    }

    .flow-step:hover {
        transform: translateY(-5px);
    }

    .flow-badge {
        width: 90px;
        height: 90px;
        margin: 0 auto 10px auto;
        border-radius: 50%;
        background-color: #FFD700;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.5rem;
        color: #1e3c72;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .flow-step:nth-child(3) .flow-badge {
        background-color: #fd7e14;
        color: #fff;
    }

    .flow-step:nth-child(5) .flow-badge {
        background-color: #6f42c1;
        color: #fff;
    }

    .flow-label {
        background-color: white;
        color: #1e3c72;
        padding: 6px 12px;
        border-radius: 8px;
        margin-top: 10px;
        display: inline-block;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .flow-desc {
        font-size: 0.9rem;
        color: #f0f0f0;
        margin-top: 10px;
    }

    .arrow-line {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
        font-size: 2rem;
        color: #FFD700;
    }

    @media (max-width: 768px) {
        .arrow-line {
            display: none;
        }
    }

    .btn-custom {
        background-color: #FFD700;
        color: #1e3c72;
        font-weight: bold;
        border-radius: 10px;
        border: none;
    }

    .btn-custom:hover {
        background-color: #e6c200;
        color: #1e3c72;
    }
</style>

<section class="sdi-section container mt-5 mb-5">
    <h2 class="text-center">Prinsip Satu Data Indonesia (SDI)</h2>
    <p class="sdi-description">
        Prinsip SDI adalah landasan dalam tata kelola data pemerintah agar lebih <strong>terpadu, akurat, dan mudah dibagikan</strong>. Dengan prinsip ini, kita bisa menghasilkan kebijakan publik yang berbasis data dan berdampak nyata bagi masyarakat.
    </p>

    <div class="flow-container">
        <a href="<?= base_url('digistat/pretest3') ?>" class="flow-step">
            <div class="flow-badge">1</div>
            <div class="flow-label">Pretest</div>
            <p class="flow-desc">Uji awal untuk mengukur pemahaman Anda sebelum belajar.</p>
        </a>

        <div class="arrow-line d-none d-md-flex">
            <i class="bi bi-arrow-right"></i>
        </div>

        <a href="<?= base_url('digistat/materi3') ?>" class="flow-step">
            <div class="flow-badge">2</div>
            <div class="flow-label">Materi</div>
            <p class="flow-desc">Pelajari prinsip-prinsip SDI secara interaktif dan mudah dipahami.</p>
        </a>

        <div class="arrow-line d-none d-md-flex">
            <i class="bi bi-arrow-right"></i>
        </div>

        <a href="<?= base_url('digistat/posttest3') ?>" class="flow-step">
            <div class="flow-badge">3</div>
            <div class="flow-label">Posttest</div>
            <p class="flow-desc">Evaluasi kembali pemahaman Anda setelah mempelajari materi.</p>
        </a>
    </div>

    <div class="text-center mt-5">
        <a href="<?= base_url('statistik_sektoral/pembinaan') ?>" class="btn btn-custom px-4 py-2">← Kembali ke Menu Digistat</a>
    </div>
</section>

<!-- Optional: Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">