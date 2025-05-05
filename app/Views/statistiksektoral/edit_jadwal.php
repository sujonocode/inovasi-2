<!-- Display error pop-up if an error message is passed -->
<?php if (isset($error)): ?>
    <!-- Error Pop-up Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= $error; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Display success pop-up if a success message is passed -->
<?php if (isset($success)): ?>
    <!-- Success Pop-up Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= $success; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-section">
                <h2 class="text-center mb-4">Formulir Edit Jadwal Pembinaan</h2>
                <?php if (isset($jadwalStatistikSektoral)): ?>
                    <form onsubmit="return validateCheckboxes()" action="<?= base_url('statistik_sektoral/update/' . $jadwalStatistikSektoral['id']) ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="ketua" class="col-md-3 form-label">Ketua Tim:</label>
                            <div class="col-md-9">
                                <input id="ketua_tim" type="text" name="ketua_tim" class="form-control"
                                    value="<?= $jadwalStatistikSektoral['ketua_tim'] ?>" required readonly>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="opd" class="col-md-3 form-label">OPD:</label>
                            <div class="col-md-9">
                                <input id="opd" type="text" name="opd" class="form-control"
                                    value="<?= $jadwalStatistikSektoral['opd'] ?>" required readonly>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="topik" class="col-md-3 form-label">Topik:</label>
                            <div class="col-md-9">
                                <input id="topik" type="text" name="topik" class="form-control"
                                    value="<?= $jadwalStatistikSektoral['topik'] ?>" required>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="tempat" class="col-md-3 form-label">Tempat:</label>
                            <div class="col-md-9">
                                <input id="tempat" type="text" name="tempat" class="form-control"
                                    value="<?= $jadwalStatistikSektoral['tempat'] ?>" required>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="tanggal" class="col-md-3 form-label">Tanggal:</label>
                            <div class="col-md-9">
                                <input id="tanggal" type="date" name="tanggal" class="form-control" value="<?= $jadwalStatistikSektoral['tanggal'] ?>" required>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="waktu_start" class="col-md-3 form-label">Waktu Mulai:</label>
                            <div class="col-md-9">
                                <input id="waktu_start" type="time" name="waktu_start" class="form-control" step="1" value="<?= $jadwalStatistikSektoral['waktu_start'] ?>" required>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="waktu_end" class="col-md-3 form-label">Waktu Selesai:</label>
                            <div class="col-md-9">
                                <input id="waktu_end" type="time" name="waktu_end" class="form-control" step="1" value="<?= $jadwalStatistikSektoral['waktu_end'] ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="kontak" class="col-md-3 col-form-label fw-bold">Kontak:</label>
                            <div class="col-md-9">
                                <!-- <pre>< ?php print_r($jadwalKonten['kontak']); ?></pre> -->
                                <select name="kontak[]" id="kontak" class="form-select" multiple required>
                                    <?php foreach ($contacts as $contact): ?>
                                        <option value="<?= $contact['nomor'] ?>"
                                            <?php if (in_array($contact['nomor'], $jadwalStatistikSektoral['kontak'])) echo 'selected'; ?>>
                                            <?= htmlspecialchars($contact['nama']) ?> (<?= $contact['nomor'] ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label class="col-md-3 form-label">Status Pelaksanaan:</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input type="radio" id="belumterlaksana" name="status" value="Belum Terlaksana"
                                                class="form-check-input">
                                            <label for="belumterlaksana" class="form-check-label">Belum Terlaksana</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input type="radio" id="terlaksana" name="status" value="Terlaksana"
                                                class="form-check-input">
                                            <label for="terlaksana" class="form-check-label">Terlaksana</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input type="radio" id="dibatalkan" name="status" value="Dibatalkan"
                                                class="form-check-input">
                                            <label for="dibatalkan" class="form-check-label">Dibatalkan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group align-items-center flex-column flex-md-row">
                            <label for="catatan" class="col-md-3 form-label">Catatan:</label>
                            <div class="col-md-9">
                                <textarea id="catatan" name="catatan" class="form-control" rows="3" required><?= esc($jadwalStatistikSektoral['catatan']) ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?= base_url('statistik_sektoral/manage') ?>" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                            <!-- <button type="reset" class="btn btn-secondary"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button> -->
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
    function validateCheckboxes() {
        // const checkboxes = document.querySelectorAll('input[name="pengingat[]"]');
        // const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        // if (!isChecked) {
        //     alert('Silakan pilih minimal satu opsi pada "Pengingat".');
        //     return false;
        // }
        return true;
    }
</script>

<script>
    // Retrieve "Kategori" value from PHP
    const status = "<?= $jadwalStatistikSektoral['status'] ?>";

    // Example: Set "Kategori" radio button
    const statusRadio = document.querySelector(`input[name="status"][value="${status}"]`);
    if (statusRadio) {
        statusRadio.checked = true;
    }

    // // Retrieve the "Pengingat" string from PHP
    // let pengingatString = '< ?= json_encode($jadwalStatistikSektoral['pengingat']) ?>';

    // // If the string has extra quotes, remove them
    // if (pengingatString.startsWith('"') && pengingatString.endsWith('"')) {
    //     pengingatString = pengingatString.slice(1, -1);
    // }

    // // Now safely parse the JSON string
    // const pengingatArray = JSON.parse(pengingatString);

    // // Map the "Pengingat" values to checkbox IDs
    // const pengingatMapping = {
    //     'Hari H': 'pengingat1',
    //     'H-3': 'pengingat2',
    //     'H-7': 'pengingat3'
    // };

    // // Set the checkboxes based on the "Pengingat" values
    // pengingatArray.forEach(value => {
    //     const id = pengingatMapping[value];
    //     const pengingatCheckbox = document.getElementById(id);
    //     if (pengingatCheckbox) {
    //         pengingatCheckbox.checked = true;
    //     }
    // });

    // Automatically show the modal when the page loads if an error is passed
    window.onload = function() {
        <?php if (isset($error)): ?>
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        <?php endif; ?>
        <?php if (isset($success)): ?>
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        <?php endif; ?>
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
        // Initialize Select2
        $('#kontak').select2();

        // If you need to set the selected values programmatically, you can do so like this:
        var selectedKontak = <?= json_encode($jadwalStatistikSektoral['kontak']); ?>; // Get the selected contacts as a JavaScript array

        // Set the selected values dynamically using Select2
        $('#kontak').val(selectedKontak).trigger('change');
    });
</script>

// <script>
    //     const jadwal = < ?= json_encode($jadwalStatistikSektoral); ?>;
    //     console.log("Jadwal:", jadwal);
    // 
</script>