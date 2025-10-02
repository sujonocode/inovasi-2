<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    .score-container {
        max-width: 500px;
        margin: auto;
        padding: 2rem;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        border-radius: 16px;
        color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-gold {
        background-color: #FFD700;
        color: #000;
    }

    .btn-gold:hover {
        background-color: #e6c200;
        color: #000;
    }

    .session-box {
        background-color: white;
        border-radius: 10px;
        color: #000;
        padding: 0.5rem 1rem;
        display: inline-block;
    }

    .toast-notif {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #2a5298;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        display: none;
        z-index: 9999;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="score-container text-center">
        <h2 class="mb-4"><?= esc($type) ?> Selesai!</h2>

        <!-- Chart -->
        <div class="mb-4">
            <canvas id="scoreChart" style="max-width: 300px; margin: auto;"></canvas>
        </div>

        <p class="fs-5">Skor Anda: <strong><?= esc($score) ?>/10</strong> (<?= esc($score * 10) ?>%)</p>

        <!-- Session ID -->
        <div class="mt-3">
            <div class="session-box">
                <strong>Token Hasil:</strong>
                <span id="sessionId"><?= esc($session_id) ?></span>
                <button class="btn btn-sm btn-gold ms-2" onclick="copySessionId()">Salin</button>
            </div>
        </div>

        <!-- Navigasi -->
        <div class="mt-4">
            <?php if ($type == 'Pre Test'): ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-2">
                        <a href="<?= base_url('digistat/materi3') ?>"
                            class="btn btn-lg btn-gold w-100"
                            style="height:70px; display:flex; align-items:center; justify-content:center; text-align:center; white-space:normal;">
                            Lanjut ke Materi
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-2">
                        <a href="<?= base_url('digistat/modul3') ?>"
                            class="btn btn-lg btn-gold w-100"
                            style="height:70px; display:flex; align-items:center; justify-content:center; text-align:center; white-space:normal;">
                            Kembali ke Halaman Awal
                        </a>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <a href="<?= base_url('digistat/modul4') ?>"
                            class="btn btn-lg btn-gold w-100"
                            style="height:70px; display:flex; align-items:center; justify-content:center; text-align:center; white-space:normal;">
                            Lanjut ke Modul 4
                        </a>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

<!-- Toast -->
<div id="toast" class="toast-notif">Token hasil berhasil disalin!</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const score = <?= $score * 10 ?>;
    const ctx = document.getElementById('scoreChart').getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Benar', 'Salah'],
            datasets: [{
                data: [score, 100 - score],
                backgroundColor: ['#FFD700', '#e0e0e0'], // Kuning untuk benar, Abu-abu untuk salah
                borderColor: ['#ffffff', '#ffffff'],
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.parsed + '%';
                        }
                    }
                }
            }
        },
        plugins: [{
            id: 'centerText',
            beforeDraw: chart => {
                const {
                    width,
                    height,
                    ctx
                } = chart;
                ctx.restore();
                const fontSize = (height / 7).toFixed(2);
                ctx.font = fontSize + "px Arial";
                ctx.textBaseline = "middle";
                ctx.fillStyle = "#ffffff"; // Ubah jadi putih agar kontras
                const text = score + "%";
                const textX = Math.round((width - ctx.measureText(text).width) / 2);
                const textY = height / 2;
                ctx.fillText(text, textX, textY);
                ctx.save();
            }
        }]
    });
</script>

<script>
    function copySessionId() {
        const sessionId = document.getElementById("sessionId").innerText;
        navigator.clipboard.writeText(sessionId).then(function() {
            // Tampilkan toast
            const toast = document.getElementById("toast");
            toast.style.display = "block";
            setTimeout(() => {
                toast.style.display = "none";
            }, 2000);
        }).catch(function(error) {
            alert("Gagal menyalin token hasil: " + error);
        });
    }
</script>

<?= $this->endSection() ?>