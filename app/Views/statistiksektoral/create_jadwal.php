<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-section">
                <h2 class="text-center mb-4">Formulir Jadwal Pembinaan Statistik Sektoral</h2>
                <form onsubmit="return validateCheckboxes()" action="/statistik_sektoral/store" method="post">
                    <?= csrf_field() ?>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="ketua" class="col-md-3 form-label">Ketua Tim:</label>
                        <div class="col-md-9">
                            <input id="ketua_tim" type="text" name="ketua_tim" class="form-control"
                                <?php $user['ketua_tim'] = 'Sulistyo Hadi'; ?>;
                                placeholder="" value="<?= $user['ketua_tim'] ?>" required readonly>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="opd" class="col-md-3 form-label">OPD:</label>
                        <div class="col-md-9">
                            <input id="opd" type="text" name="opd" class="form-control"
                                <?php $user['opd'] = 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus'; ?>;
                                placeholder="" value="<?= $user['opd'] ?>" required readonly>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="topik" class="col-md-3 form-label">Topik:</label>
                        <div class="col-md-9">
                            <input id="topik" type="text" name="topik" class="form-control"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="tempat" class="col-md-3 form-label">Tempat:</label>
                        <div class="col-md-9">
                            <input id="tempat" type="text" name="tempat" class="form-control"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="tanggal" class="col-md-3 form-label">Tanggal:</label>
                        <div class="col-md-9">
                            <input id="tanggal" type="date" name="tanggal" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="waktu_start" class="col-md-3 form-label">Waktu Mulai:</label>
                        <div class="col-md-9">
                            <input id="waktu_start" type="time" name="waktu_start" class="form-control" step="1" value="08:00:00" required>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="waktu_end" class="col-md-3 form-label">Waktu Selesai:</label>
                        <div class="col-md-9">
                            <input id="waktu_end" type="time" name="waktu_end" class="form-control" step="1" value="12:00:00" required>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="kontak" class="col-md-3 col-form-label fw-bold">Kontak:</label>
                        <div class="col-md-9">
                            <select name="kontak[]" id="kontak" class="form-select" multiple required>
                                <?php foreach ($contacts as $contact): ?>
                                    <option value="<?= $contact['nomor'] ?>">
                                        <?= htmlspecialchars($contact['nama']) ?> (<?= $contact['nomor'] ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group align-items-center flex-column flex-md-row">
                        <label for="catatan" class="col-md-3 form-label">Catatan:</label>
                        <div class="col-md-9">
                            <textarea id="catatan" name="catatan" class="form-control" rows="3"
                                placeholder="Tambahkan catatan" required></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="<?= base_url('statistik_sektoral/manage') ?>" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        <!-- <button type="reset" class="btn btn-secondary"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateCheckboxes() {
        // const checkboxes = document.querySelectorAll('input[name="pengingat[]"]');
        // const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        // if (!isChecked) {
        //     alert('Silakan pilih minimal satu opsi pada "reminder"');
        //     return false;
        // }
        return true;
    }
</script>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery (Required for Select2) -->
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        if ($.fn.select2) { // Check if Select2 is available
            $('#kontak').select2({
                placeholder: "Pilih kontak...",
                allowClear: true
            });
        } else {
            console.error("Select2 is not loaded.");
        }
    });
</script>