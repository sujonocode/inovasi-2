<div class="container my-5">
    <div class="card" style="border-radius: 6px;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="mb-3 mb-md-0">Jadwal Pembinaan Desa Cantik</h1>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="<?= base_url('desa_cantik/create') ?>"
                        class="btn btn-primary btn-sm flex-fill text-center"
                        style="min-width: 120px;"
                        title="Tambah Reminder Baru">
                        <i class="fa-solid fa-plus me-1"></i> Tambah
                    </a>
                    <a href="<?= base_url('desa_cantik/export_xlsx') ?>"
                        class="btn btn-success btn-sm flex-fill text-center"
                        style="min-width: 120px;"
                        title="Download Data Reminder">
                        <i class="fa-solid fa-download me-1"></i> Download
                    </a>
                    <a href="<?= base_url('desa_cantik') ?>"
                        class="btn btn-secondary btn-sm flex-fill text-center"
                        style="min-width: 120px;"
                        title="Kalender Data Reminder">
                        <i class="fa-solid fa-calendar-days"></i> Kalender
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover">
                    <?php $isAdmin = 'admin' === 'admin'; ?>
                    <thead>
                        <tr>
                            <th>Tanggal dan Waktu</th>
                            <th>Tim</th>
                            <th>Topik</th>
                            <th>Narahubung Ketua Tim</th>
                            <th>Narahubung Dinas</th>
                            <th>Catatan</th>
                            <th>PIC</th>
                            <?php if ($isAdmin): ?>
                                <th>Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($jadwalDesaCantiks)): ?>
                            <?php foreach ($jadwalDesaCantiks as $jadwalDesaCantik): ?>
                                <tr>
                                    <td><?= $jadwalDesaCantik['tanggal'] . " " . date("H:i", strtotime($jadwalDesaCantik['waktu_start'])) . " s.d. " . date("H:i", strtotime($jadwalDesaCantik['waktu_end'])) . " WIB" ?></td>
                                    <td><?= $jadwalDesaCantik['desa'] ?></td>
                                    <td><?= $jadwalDesaCantik['topik'] ?></td>
                                    <td><?= $jadwalDesaCantik['kontak_ketua_tim'] ?></td>
                                    <td><?= $jadwalDesaCantik['kontak_narahubung'] ?></td>
                                    <td><?= $jadwalDesaCantik['catatan'] ?></td>
                                    <td><?= $jadwalDesaCantik['created_by'] ?></td>
                                    <?php if ($isAdmin): ?>
                                        <td>
                                            <?php if ($jadwalDesaCantik['status'] === 'Dibatalkan'): ?>
                                                <i class="fa-solid fa-flag" style="color: rgb(253, 20, 20);" title="Dibatalkan"></i>
                                            <?php elseif ($jadwalDesaCantik['status'] === 'Belum Terlaksana'): ?>
                                                <i class="fa-solid fa-flag" style="color: rgb(253, 199, 20);" title="Belum Terlaksana"></i>
                                            <?php elseif ($jadwalDesaCantik['status'] === 'Terlaksana'): ?>
                                                <i class="fa-solid fa-flag" style="color: rgb(0, 190, 32);" title="Terlaksana"></i>
                                            <?php endif; ?>
                                            <!-- <a href="#" onclick="handleLinkClick('< ?= $jadwalDesaCantik['url'] ?>'); return false;"><i class="fa-solid fa-eye" title="Lihat"></i></a> -->
                                            <a href="/desa_cantik/edit/<?= $jadwalDesaCantik['id'] ?>"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                                            <a href="#" onclick="openDeleteModal(<?= $jadwalDesaCantik['id'] ?>)"><i class="fa-solid fa-trash" title="Hapus"></i></a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- <tr>
                                <td colspan="7" style="text-align: center; font-weight: bold;">Belum ada data surat masuk</td>
                            </tr> -->
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <tr>
                                    <?php if ($isAdmin): ?>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    <?php else: ?>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    <?php endif; ?>
                                </tr>
                            <?php endfor; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('error')): ?>
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('error'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('success'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Notifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus jadwal pembinaan ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a id="confirmDeleteBtn" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('limited')): ?>
    <div class="modal fade" id="limitedModal" tabindex="-1" aria-labelledby="limitedModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="limitedModalLabel">Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('limited'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="modal fade" id="seeModal" tabindex="-1" aria-labelledby="seeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="seeModalLabel">Notifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modal-message"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to handle the "eye" icon click event
    function handleLinkClick(url) {
        const modalMessage = document.getElementById('modal-message');
        const seeModal = new bootstrap.Modal(document.getElementById('seeModal'));

        if (!url || url.trim() === '') {
            // If URL is empty, show modal with "link empty" message
            modalMessage.innerText = 'Link masih kosong';
            seeModal.show();
        } else {
            // If URL is not empty, open it in a new tab
            window.open(url, '_blank');
        }
    }
</script>

<script>
    // Open the modal and set the delete URL dynamically
    function openDeleteModal(suratId) {
        // Set the delete ID in a custom attribute, or store it globally
        const deleteUrl = "<?= base_url() ?>" + "desa_cantik/delete/" + suratId;

        // Store the URL in the delete button as a data attribute
        document.getElementById('confirmDeleteBtn').setAttribute('data-delete-url', deleteUrl);

        // Show the modal
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }

    // Handle the delete button click
    document.getElementById('confirmDeleteBtn').addEventListener('click', function(event) {
        // Prevent the default behavior
        event.preventDefault();

        // Get the URL to be deleted from the data attribute
        const deleteUrl = this.getAttribute('data-delete-url');

        // Redirect to the delete URL (or you can use AJAX to delete data without a page reload)
        window.location.href = deleteUrl;
    });
</script>

<script>
    $(document).ready(function() {
        <?php if ($isAdmin): ?>
            var columnDefs = [{
                    orderable: true,
                    targets: [0, 1, 2, 3, 4, 5, 6]
                },
                {
                    orderable: false,
                    targets: [7] // 'Actions' column
                }
            ];
        <?php else: ?>
            var columnDefs = [{
                orderable: true,
                targets: [0, 1, 2, 3, 4, 5, 6]
            }];
        <?php endif; ?>

        $('#example').DataTable({
            scrollY: '400px',
            scrollX: true,
            autoWidth: false,
            scrollCollapse: true,
            paging: true,
            fixedHeader: true,
            pageLength: 10,
            lengthMenu: [5, 10, 15, 20],
            columnDefs: columnDefs,
            order: [
                [0, 'desc']
            ],
        });
    });

    // Automatically show the modal when the page loads if a flash message exists
    window.onload = function() {
        <?php if (session()->getFlashdata('error')): ?>
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        <?php endif; ?>

        <?php if (session()->getFlashdata('limited')): ?>
            var limitedModal = new bootstrap.Modal(document.getElementById('limitedModal'));
            limitedModal.show();
        <?php endif; ?>
    }
</script>

<!-- <script>
    const contacts = < ?= json_encode($jadwalDesaCantik); ?>;
    console.log("Contacts:", contacts);
</script> -->