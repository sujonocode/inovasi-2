<div class="container my-5">
    <div class="row mb-4">
        <div class="col text-center">
            <h2 class="fw-bold section-title">Jadwal Pembinaan Desa Cantik</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-sm">
                <div class="card-body p-3">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Jadwal Pembinaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="eventModalLabel">
                    Jadwal Pembinaan
                    <a href="#" class="ms-2">
                        <i class="fa-solid fa-pen-to-square" title="Edit Jadwal Pembinaan"></i>
                    </a>
                </h5> -->
                <h5 class="modal-title" id="eventModalLabel">
                    Jadwal Pembinaan
                    <?php $role = 'admin'; ?>
                    <?php if ($role == 'admin'): ?>
                        <!-- < ?php if (session('role') == 'admin'): ?> -->
                        <a href="#" id="editLink" class="ms-2">
                            <i class="fa-solid fa-pen-to-square" title="Edit Jadwal Pembinaan"></i>
                        </a>
                    <?php endif; ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 id="modalEventTitle" class="fw-bold"></h5>
                <p>Tanggal &nbsp;&nbsp;: <span id="modalEventDate"></span></p>
                <p>Waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="modalEventTime"></span></p>
                <p>Catatan &nbsp;&nbsp;: <span id="modalEventNotes"></span></p>
                <!-- </div>
            <div class="modal-footer"> -->
                <!-- <div class="container">
                    <div class="row g-2">
                        <div class="col-12 col-md-6">
                            <a href="#" id="kontak_ketua_tim" class="btn btn-primary w-100">Ketua Tim</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="#" id="kontak_narahubung" class="btn btn-danger w-100">Narahubung Desa</a>
                        </div>
                    </div>
                </div> -->
                <div class="container">
                    <div class="row g-2">
                        <div class="col-12 col-md-6">
                            <a href="#" id="kontak_ketua_tim" class="btn w-100" style="background-color: #128C7E; color: #ffffff;">
                                <!-- <a href="#" id="kontak_ketua_tim" class="btn w-100" style="background-color: #25D366; color: #ffffff;"> -->
                                <i class="fab fa-whatsapp me-2"></i>Ketua Tim
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="#" id="kontak_narahubung" class="btn w-100" style="background-color: #128C7E; color: #ffffff;">
                                <i class="fab fa-whatsapp me-2"></i>Narahubung Desa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            firstDay: 1,
            locale: 'id',
            aspectRatio: window.innerWidth < 768 ? 1 : 1.5, // Adjust aspect ratio for mobile
            contentHeight: 'auto',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: window.innerWidth < 768 ? 'dayGridMonth' : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            locale: 'id', // force colon time format
            eventTimeFormat: {
                hour: '2-digit',
                minute: '2-digit',
                // meridiem: false,
                hour12: false
            },
            events: <?= json_encode(array_map(function ($jadwalDesaCantik) {
                        return [
                            'id' => $jadwalDesaCantik['id'],
                            'title' => $jadwalDesaCantik['topik'],
                            'start' => $jadwalDesaCantik['tanggal'] . 'T' . $jadwalDesaCantik['waktu_start'],
                            'end' => $jadwalDesaCantik['tanggal'] . 'T' . $jadwalDesaCantik['waktu_end'],
                            'allDay' => false,
                            'extendedProps' => [
                                'waktu' => $jadwalDesaCantik['waktu_start'] . " s.d. " . $jadwalDesaCantik['waktu_end'] . " WIB",
                                'kontak' => $jadwalDesaCantik['topik'],
                                'pengingat' => $jadwalDesaCantik['topik'],
                                'catatan' => $jadwalDesaCantik['catatan'],
                                'kontak_ketua_tim' => $jadwalDesaCantik['kontak_ketua_tim'],
                                'kontak_narahubung' => $jadwalDesaCantik['kontak_narahubung'],
                            ]
                        ];
                    }, $jadwalDesaCantiks)) ?>,
            buttonText: {
                today: 'Hari Ini',
                month: 'Bulan',
                week: 'Minggu',
                day: 'Hari'
            },
            eventDidMount: function(info) {
                // Force time to HH:MM format with colon
                let start = info.event.start;
                if (start) {
                    let hours = start.getHours().toString().padStart(2, '0');
                    let minutes = start.getMinutes().toString().padStart(2, '0');
                    let formattedTime = `${hours}:${minutes}`;

                    // Replace default time text with custom formatted time
                    const timeElem = info.el.querySelector('.fc-event-time');
                    if (timeElem) {
                        timeElem.textContent = formattedTime;
                    }
                }
            },
            eventClick: function(info) {
                // Close any existing modals before opening a new one
                var eventModal = document.getElementById('eventModal');
                var moreEventsModal = document.querySelector('.fc-more-popover'); // FullCalendar's built-in popover for "+N others"

                var eventModalInstance = bootstrap.Modal.getInstance(eventModal);
                if (eventModalInstance) {
                    eventModalInstance.hide();
                }

                // Close the "+N others" modal if it's open
                if (moreEventsModal) {
                    moreEventsModal.style.display = 'none'; // Hide the popover
                }

                // Populate modal content
                const date = new Date(info.event.start);
                const formattedDate = date.toLocaleDateString("id-ID", {
                    weekday: "long",
                    day: "2-digit",
                    month: "long",
                    year: "numeric"
                });
                // const contacts = < ?= json_encode($contacts, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
                // const contactNumbers = info.event.extendedProps.kontak || 'N/A';
                // if (contactNumbers !== 'N/A') {
                //     const contactNames = contactNumbers.split(',').map(number => contacts[number] || number).join(', ');

                //     document.getElementById('modalEventContact').textContent = contactNames;
                // } else {
                //     document.getElementById('modalEventContact').textContent = 'N/A';
                // }
                document.getElementById('modalEventTitle').textContent = info.event.title;
                document.getElementById('modalEventDate').textContent = formattedDate;
                // Remove " WIB" first (if it's there), then process the time
                let waktuClean = info.event.extendedProps.waktu.replace(" WIB", "").trim();

                let [start, end] = waktuClean.split(" s.d. ");
                let formattedStart = start.slice(0, 5); // "08:00"
                let formattedEnd = end.slice(0, 5); // "00:00"

                let finalWaktu = `${formattedStart} s.d. ${formattedEnd} WIB`;
                document.getElementById('modalEventTime').textContent = finalWaktu || 'N/A';
                // document.getElementById('modalEventTime').textContent = info.event.extendedProps.waktu;
                // document.getElementById('modalEventTime').textContent = info.event.extendedProps.waktu.split(":").slice(0, 2).join(":") + " WIB" || 'N/A';
                // document.getElementById('modalEventReminder').textContent = info.event.extendedProps.pengingat.replace(/[\[\]"]/g, '').split(",").join(", ") || 'N/A';
                document.getElementById('modalEventNotes').textContent = info.event.extendedProps.catatan || 'N/A';

                // Show the event details modal
                var myModal = new bootstrap.Modal(eventModal);
                myModal.show();

                const ketua = info.event.extendedProps.kontak_ketua_tim || '';
                const narahubung = info.event.extendedProps.kontak_narahubung || '';
                const id = info.event.id || '';

                document.getElementById('kontak_ketua_tim').href = ketua ? `https://wa.me/${ketua}` : '#';
                document.getElementById('kontak_narahubung').href = narahubung ? `https://wa.me/${narahubung}` : '#';
                document.getElementById('editLink').href = id ? `/statistik_sektoral/edit/${id}` : '#';
            },
            dayMaxEventRows: 3,
            moreLinkText: function(n) {
                return "+" + n + " others";
            }
        });

        calendar.render();

        function makeButtonsResponsive() {
            document.querySelectorAll('.fc-button').forEach(function(btn) {
                btn.classList.add('btn', 'btn-sm', 'btn-primary');
                btn.style.fontSize = '14px';
            });
        }

        setTimeout(makeButtonsResponsive, 500);
    });
</script>