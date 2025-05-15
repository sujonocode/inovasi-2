<style>
    .hover-card {
        transition: all 0.2s ease-in-out;
    }

    .hover-card:hover {
        box-shadow: 0 0 15px rgba(0, 123, 255, 0.25);
        transform: scale(1.01);
    }
</style>

<div class="container my-4">
    <div class="row">
        <?php
        $documents = [
            [
                'title' => 'Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024',
                'date' => '14 Mei 2025',
                'tag' => 'Dokumen Pendukung',
                'image' => base_url('assets/document/example1.jpg'),
                'file' => base_url('assets/document/example1.pdf')
            ],
            [
                'title' => 'Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024',
                'date' => '14 Mei 2025',
                'tag' => 'Dokumen Pendukung',
                'image' => base_url('assets/document/example1.jpg'),
                'file' => base_url('assets/document/example1.pdf')
            ],
            [
                'title' => 'Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024',
                'date' => '14 Mei 2025',
                'tag' => 'Dokumen Pendukung',
                'image' => base_url('assets/document/example1.jpg'),
                'file' => base_url('assets/document/example1.pdf')
            ],
            [
                'title' => 'Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024',
                'date' => '14 Mei 2025',
                'tag' => 'Dokumen Pendukung',
                'image' => base_url('assets/document/example1.jpg'),
                'file' => base_url('assets/document/example1.pdf')
            ],
        ];
        ?>

        <?php foreach ($documents as $doc): ?>
            <div class="col-md-12 mb-3">
                <div class="card shadow-sm hover-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2 p-3 d-flex justify-content-center">
                            <img src="<?= $doc['image'] ?>" class="img-fluid rounded" alt="Cover Dokumen">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <p class="text-muted mb-1">
                                    <i class="far fa-calendar-alt me-2"></i><?= $doc['date'] ?>
                                </p>
                                <h5 class="card-title text-primary"><?= $doc['title'] ?></h5>
                                <p class="card-text text-secondary"><?= $doc['title'] ?></p>
                                <p class="mb-3">
                                    <i class="fas fa-tags me-2"></i><?= $doc['tag'] ?>
                                </p>
                                <a href="<?= $doc['file'] ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                    <i class="fas fa-download me-1"></i> Unduh Dokumen
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- <div class="container mt-4">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-2 p-3 d-flex justify-content-center">
                        <img src="<?= base_url('assets/document/example1.jpg') ?>" class="img-fluid rounded image" alt="Cover Dokumen">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <p class="text-muted mb-1">
                                <i class="far fa-calendar-alt me-2"></i>14 Mei 2025
                            </p>
                            <h5 class="card-title text-primary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </h5>
                            <p class="card-text text-secondary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-tags me-2"></i>Dokumen Pendukung
                            </p>
                            <a href="<?= base_url('assets/document/example1.pdf') ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                <i class="fas fa-download me-1"></i> Unduh Dokumen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-2 p-3 d-flex justify-content-center">
                        <img src="<?= base_url('assets/document/example1.jpg') ?>" class="img-fluid rounded image" alt="Cover Dokumen">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <p class="text-muted mb-1">
                                <i class="far fa-calendar-alt me-2"></i>14 Mei 2025
                            </p>
                            <h5 class="card-title text-primary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </h5>
                            <p class="card-text text-secondary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-tags me-2"></i>Dokumen Pendukung
                            </p>
                            <a href="<?= base_url('assets/document/example1.pdf') ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                <i class="fas fa-download me-1"></i> Unduh Dokumen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-2 p-3 d-flex justify-content-center">
                        <img src="<?= base_url('assets/document/example1.jpg') ?>" class="img-fluid rounded image" alt="Cover Dokumen">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <p class="text-muted mb-1">
                                <i class="far fa-calendar-alt me-2"></i>14 Mei 2025
                            </p>
                            <h5 class="card-title text-primary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </h5>
                            <p class="card-text text-secondary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-tags me-2"></i>Dokumen Pendukung
                            </p>
                            <a href="<?= base_url('assets/document/example1.pdf') ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                <i class="fas fa-download me-1"></i> Unduh Dokumen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-2 p-3 d-flex justify-content-center">
                        <img src="<?= base_url('assets/document/example1.jpg') ?>" class="img-fluid rounded image" alt="Cover Dokumen">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <p class="text-muted mb-1">
                                <i class="far fa-calendar-alt me-2"></i>14 Mei 2025
                            </p>
                            <h5 class="card-title text-primary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </h5>
                            <p class="card-text text-secondary">
                                Produk Domestik Regional Bruto Kabupaten Tanggamus menurut Lapangan Usaha 2020-2024
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-tags me-2"></i>Dokumen Pendukung
                            </p>
                            <a href="<?= base_url('assets/document/example1.pdf') ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                <i class="fas fa-download me-1"></i> Unduh Dokumen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->