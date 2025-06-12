<style>
    :root {
        --primary-dark: #1e3c72;
        --primary-light: #2a5298;
        --accent: #FFD700;
    }

    .hero {
        position: relative;
        background: url('/assets/image/digistat-hero-1.jpg') center/cover no-repeat;
        color: white;
        padding: 100px 20px;
        text-align: center;
        border-radius: 0 0 40px 40px;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.40);
        backdrop-filter: blur(2px);
        z-index: 1;
    }

    .hero .container {
        position: relative;
        z-index: 2;
    }

    .hero h1 {
        font-weight: 800;
        font-size: 3.2rem;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        animation: fadeInDown 1s ease-out forwards;
    }

    .hero p.lead {
        font-size: 1.25rem;
        margin-top: 1rem;
        text-shadow: 0 0 6px rgba(255, 255, 255, 0.6);
        border-right: 2px solid var(--accent);
        white-space: nowrap;
        overflow: hidden;
        width: 0;
        animation: typing 4s steps(80, end) forwards;
    }

    /* @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    } */

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-primary {
        background-color: var(--accent);
        border: none;
        color: #000;
    }

    .btn-primary:hover {
        background-color: #e6c200;
        color: #000;
    }

    .card-img-top {
        aspect-ratio: 4 / 3;
        object-fit: cover;
    }

    .card {
        background: linear-gradient(135deg, #f3f4f6, rgb(210, 226, 248));
        border: none;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        color: var(--primary-dark);
        font-weight: 600;
    }

    .card-text {
        color: #333;
    }
</style>

<!-- Hero Section -->
<section class="hero mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Digistat</h1>
        <p>
            Digital Literasi Statistik – Meningkatkan literasi statistik untuk mendukung
            <strong>Satu Data Indonesia</strong> dan <strong>sistem statistik nasional</strong>
            yang terintegrasi dan berkualitas.
        </p>
    </div>
</section>

<!-- Cards Section -->
<section class="container mb-5">
    <div class="row g-4">
        <?php
        $cards = [
            [
                'title' => 'Prinsip SDI',
                'desc' => 'Prinsip utama dalam implementasi Satu Data Indonesia.',
                'img' => '/assets/image/prinsip-sdi.jpg',
                'link' => base_url('digistat/modul1')
            ],
            [
                'title' => 'Kualitas Data',
                'desc' => 'Standar dan pedoman untuk menjamin kualitas data pemerintah.',
                'img' => '/assets/image/kualitas-data.jpg',
                'link' => base_url('digistat/modul2')
            ],
            [
                'title' => 'Proses Bisnis Statistik',
                'desc' => 'Langkah sistematis dalam pengelolaan data statistik nasional.',
                'img' => '/assets/image/proses-bisnis.jpg',
                'link' => base_url('digistat/modul3')
            ],
            [
                'title' => 'Kelembagaan',
                'desc' => 'Peran dan tanggung jawab lembaga dalam pengelolaan data.',
                'img' => '/assets/image/kelembagaan.jpg',
                'link' => base_url('digistat/modul4')
            ],
            [
                'title' => 'Sistem Statistik Nasional',
                'desc' => 'Integrasi data nasional dalam satu ekosistem statistik.',
                'img' => '/assets/image/ssn.jpg',
                'link' => base_url('digistat/modul5')
            ],
        ];

        foreach ($cards as $card):
        ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= esc($card['img']) ?>" class="card-img-top" alt="<?= esc($card['title']) ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= esc($card['title']) ?></h5>
                        <p class="card-text flex-grow-1"><?= esc($card['desc']) ?></p>
                        <a href="<?= esc($card['link']) ?>" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>