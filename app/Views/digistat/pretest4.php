<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    .question-nav-btn.active {
        background-color: #0d6efd;
        color: white;
    }

    .question-nav-btn.answered {
        border-color: #198754;
        background-color: #d1e7dd;
        color: #198754;
    }

    #timer {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .progress {
        height: 20px;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($type) ?> - Kuis</h2>

    <!-- Timer dan Progress -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div id="timer" class="text-danger">Waktu: 10:00</div>
        <div class="flex-grow-1 ms-4">
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" id="progressBar" style="width: 0%">0%</div>
            </div>
        </div>
    </div>

    <form method="post" action="<?= base_url($type === 'Pre Test' ? 'digistat/submitPretest4' : 'digistat/submitPosttest4') ?>" id="quizForm">
        <?= csrf_field() ?>

        <div id="quiz-container">
            <?php foreach ($questions as $i => $q): ?>
                <div class="question-block" id="question-<?= $i ?>" style="<?= $i === 0 ? '' : 'display:none;' ?>">
                    <h5>Pertanyaan <?= $i + 1 ?></h5>
                    <p><?= esc($q['question']) ?></p>
                    <?php foreach (['A', 'B', 'C', 'D'] as $opt): ?>
                        <div class="form-check">
                            <input class="form-check-input answer-radio" type="radio" name="q<?= $i ?>" value="<?= $opt ?>" id="q<?= $i . $opt ?>">
                            <label class="form-check-label" for="q<?= $i . $opt ?>">
                                <?= esc($q["option_" . strtolower($opt)]) ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigasi -->
        <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-2">
            <button type="button" class="btn btn-secondary" id="prevBtn">Sebelumnya</button>
            <div id="question-nav" class="d-flex flex-wrap gap-1">
                <?php foreach ($questions as $i => $q): ?>
                    <button type="button" class="btn btn-outline-primary btn-sm question-nav-btn" data-index="<?= $i ?>">
                        <?= $i + 1 ?>
                    </button>
                <?php endforeach; ?>
            </div>
            <button type="button" class="btn btn-primary" id="nextBtn">Lanjut</button>
        </div>

        <!-- Submit -->
        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-success d-none" id="submitBtn">Selesai</button>
        </div>
    </form>
</div>

<script>
    let current = 0;
    const total = <?= count($questions) ?>;
    const blocks = document.querySelectorAll('.question-block');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const navButtons = document.querySelectorAll('.question-nav-btn');
    const progressBar = document.getElementById('progressBar');
    const radios = document.querySelectorAll('.answer-radio');
    const quizForm = document.getElementById('quizForm');

    function showQuestion(index) {
        blocks[current].style.display = 'none';
        blocks[index].style.display = 'block';
        current = index;

        prevBtn.disabled = current === 0;
        nextBtn.style.display = current === total - 1 ? 'none' : 'inline-block';
        submitBtn.classList.toggle('d-none', current !== total - 1);

        navButtons.forEach((btn, i) => {
            btn.classList.remove('active');
            if (i === current) btn.classList.add('active');
        });
    }

    // Hitung jumlah soal yang dijawab untuk update progress bar
    function updateProgressBar() {
        const answered = new Set();
        document.querySelectorAll('input[type=radio]:checked').forEach(input => {
            const name = input.name;
            const index = parseInt(name.replace('q', ''));
            answered.add(index);
            navButtons[index].classList.add('answered');
        });
        const percent = (answered.size / total) * 100;
        progressBar.style.width = percent + '%';
        progressBar.innerText = Math.round(percent) + '%';
    }

    radios.forEach(r => r.addEventListener('change', updateProgressBar));

    prevBtn.addEventListener('click', () => showQuestion(current - 1));
    nextBtn.addEventListener('click', () => showQuestion(current + 1));
    navButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const index = parseInt(btn.getAttribute('data-index'));
            showQuestion(index);
        });
    });

    // Timer (default: 10 menit)
    let timeLeft = 10 * 60;
    const timerDisplay = document.getElementById('timer');

    function updateTimer() {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        timerDisplay.textContent = `Waktu: ${minutes}:${seconds.toString().padStart(2, '0')}`;

        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            alert("Waktu habis! Jawaban akan dikirim.");

            // Submit otomatis
            quizForm.submit();
        }
        timeLeft--;
    }

    const timerInterval = setInterval(updateTimer, 1000);

    // Inisialisasi
    showQuestion(0);
    updateProgressBar();
</script>

<?= $this->endSection() ?>