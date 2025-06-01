<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h3>Materi</h3>
    <iframe src="<?= base_url('uploads/materi.pdf') ?>" width="100%" height="600px"></iframe>
</div>
<?= $this->endSection() ?>