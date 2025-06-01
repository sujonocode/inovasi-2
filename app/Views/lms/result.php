<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h3>Hasil <?= $type ?></h3>
    <p>Skor Anda: <strong><?= $score ?>/5</strong></p>
    <?php if ($type == 'Pre Test'): ?>
        <a href="<?= base_url('lms/materi') ?>" class="btn btn-success">Lanjut ke Materi</a>
    <?php else: ?>
        <a href="<?= base_url('lms') ?>" class="btn btn-primary">Kembali ke Halaman Awal</a>
    <?php endif ?>
</div>
<?= $this->endSection() ?>