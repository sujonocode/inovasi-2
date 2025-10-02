<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .btn-gold {
        background-color: #FFD700;
        color: #1e3c72;
        font-weight: bold;
        border: none;
    }

    .btn-gold:hover {
        background-color: #e6c200;
        color: #1e3c72;
    }

    .materi-container {
        background: linear-gradient(to right, #1e3c72, #2a5298);
        padding: 40px 20px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        color: white;
    }

    .iframe-wrapper {
        border: 2px solid #FFD700;
        border-radius: 8px;
        overflow: hidden;
    }

    @media (max-width: 768px) {
        .iframe-wrapper iframe {
            height: 400px;
        }
    }

    @media (min-width: 769px) {
        .iframe-wrapper iframe {
            height: 600px;
        }
    }
</style>

<div class="container my-5">
    <div class="materi-container text-center">
        <h2 class="mb-4">Materi Pembelajaran</h2>
        <div class="iframe-wrapper mb-4">
            <iframe src="<?= base_url('uploads/descan_materi1.pdf') ?>" width="100%" frameborder="0"></iframe>
        </div>
        <a href="<?= base_url('digistatdescan/posttest1') ?>" class="btn btn-gold px-4 py-2">Lanjut ke Post Test</a>
    </div>
</div>

<?= $this->endSection() ?>