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

    .modal-content {
        background-color: #ffffff;
        color: #212529;
    }

    .modal-header .modal-title {
        color: #212529;
        font-weight: 700;
    }

    .modal-header .btn-close {
        filter: none;
    }
</style>

<section class="sdi-section container mt-5 mb-5">
    <h2 class="text-center">Modul 4. Kelembagaan Statistik</h2>
    <p class="sdi-description">
        Kelembagaan statistik memperkuat koordinasi antar instansi dalam menghasilkan dan mengelola data. Dengan peran BPS sebagai pembina, kolaborasi yang solid antar lembaga menciptakan data yang lebih terpadu, efisien, dan mudah diakses.
    </p>

    <div class="flow-container">
        <a href="<?= base_url('digistat/pretest4') ?>" class="flow-step">
            <div class="flow-badge">1</div>
            <div class="flow-label">Pretest</div>
            <p class="flow-desc">Uji awal untuk mengukur pemahaman Anda sebelum belajar.</p>
        </a>

        <div class="arrow-line d-none d-md-flex">
            <i class="bi bi-arrow-right"></i>
        </div>

        <a href="<?= base_url('digistat/materi4') ?>" class="flow-step">
            <div class="flow-badge">2</div>
            <div class="flow-label">Materi</div>
            <p class="flow-desc">Pelajari kelembagaan secara interaktif dan mudah dipahami.</p>
        </a>

        <div class="arrow-line d-none d-md-flex">
            <i class="bi bi-arrow-right"></i>
        </div>

        <a href="<?= base_url('digistat/posttest4') ?>" class="flow-step">
            <div class="flow-badge">3</div>
            <div class="flow-label">Posttest</div>
            <p class="flow-desc">Evaluasi kembali pemahaman Anda setelah mempelajari materi.</p>
        </a>
    </div>

    <div class="text-center mt-5">
        <!-- Tombol pemicu modal -->
        <button type="button" class="btn btn-custom px-4 py-2" data-bs-toggle="modal" data-bs-target="#klaimModal">
            Klaim Surat Keterangan
        </button>
    </div>
    <!-- Modal Bootstrap -->
    <div class="modal fade" id="klaimModal" tabindex="-1" aria-labelledby="klaimModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="claimForm" action="<?= base_url('klaim/simpan4') ?>" method="post" target="_blank">
                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="klaimModalLabel">Formulir Klaim Surat Keterangan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="instansi_select">Instansi</label>

                            <!-- select tanpa name supaya tidak ikut submit -->
                            <select id="instansi_select" class="form-control" required>
                                <option value="">-- Pilih Instansi --</option>
                                <option value="Dinas Kesehatan Kabupaten Tanggamus">Dinas Kesehatan Kabupaten Tanggamus</option>
                                <option value="Dinas Koperasi, UKM Perindustrian dan Perdagangan Kabupaten Tanggamus">Dinas Koperasi, UKM Perindustrian dan Perdagangan Kabupaten Tanggamus</option>
                                <option value="Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kabupaten Tanggamus">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kabupaten Tanggamus</option>
                                <option value="Dinas Komunikasi dan Informatika Kabupaten Tanggamus">Dinas Komunikasi dan Informatika Kabupaten Tanggamus</option>
                                <option value="Dinas Pendidikan dan Kebudayaan Kabupaten Tanggamus">Dinas Pendidikan dan Kebudayaan Kabupaten Tanggamus</option>
                                <option value="Dinas Sosial Kabupaten Tanggamus">Dinas Sosial Kabupaten Tanggamus</option>
                                <option value="Dinas Pariwisata dan Kebudayaan Kabupaten Tanggamus">Dinas Pariwisata dan Kebudayaan Kabupaten Tanggamus</option>
                                <option value="Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Tanggamus">Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Tanggamus</option>
                                <option value="Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Kabupaten Tanggamus">Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Kabupaten Tanggamus</option>
                                <option value="Dinas Kependudukan dan Pencatatan Sipil Kabupaten Tanggamus">Dinas Kependudukan dan Pencatatan Sipil Kabupaten Tanggamus</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                            <!-- hidden input yang benar-benar dikirim ke server -->
                            <input type="hidden" name="instansi" id="instansi_hidden" value="">
                        </div>

                        <div class="mb-3" id="instansi-lainnya" style="display:none;">
                            <input type="text" id="instansi_lainnya" class="form-control" placeholder="Tuliskan asal instansi Anda!">
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.getElementById('claimForm');
                                const select = document.getElementById('instansi_select');
                                const lainnyaDiv = document.getElementById('instansi-lainnya');
                                const lainnyaInput = document.getElementById('instansi_lainnya');
                                const hidden = document.getElementById('instansi_hidden');

                                // update hidden setiap kali pilihan berubah
                                select.addEventListener('change', function() {
                                    if (this.value === 'Lainnya') {
                                        lainnyaDiv.style.display = 'block';
                                        lainnyaInput.setAttribute('required', 'required');
                                        hidden.value = lainnyaInput.value.trim(); // sementara
                                    } else {
                                        lainnyaDiv.style.display = 'none';
                                        lainnyaInput.removeAttribute('required');
                                        hidden.value = this.value; // value pilihan biasa
                                    }
                                });

                                // update hidden ketika user mengetik isian "lainnya"
                                lainnyaInput.addEventListener('input', function() {
                                    if (select.value === 'Lainnya') {
                                        hidden.value = this.value.trim();
                                    }
                                });

                                // final check sebelum submit
                                form.addEventListener('submit', function(e) {
                                    if (select.value === 'Lainnya') {
                                        const v = lainnyaInput.value.trim();
                                        if (!v) {
                                            e.preventDefault();
                                            alert('Silakan tuliskan asal instansi pada kolom "Lainnya".');
                                            lainnyaInput.focus();
                                            return false;
                                        }
                                        hidden.value = v;
                                    } else {
                                        // jika user belum pilih (""), hidden jadi kosong -> server harus handle required
                                        hidden.value = select.value;
                                    }
                                });
                            });
                        </script>

                        <div class="mb-3">
                            <label>Token Pretest</label>
                            <input type="text" name="token_pretest" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Token Posttest</label>
                            <input type="text" name="token_posttest" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Rating Aplikasi</label>
                            <select name="rating" class="form-select" required>
                                <option value="5">★★★★★</option>
                                <option value="4">★★★★☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="1">★☆☆☆☆</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Klaim Keterangan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Optional: Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">