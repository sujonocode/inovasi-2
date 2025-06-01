<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h3>Pre-Test</h3>
    <form method="post" action="<?= base_url('lms/submitPretest') ?>">
        <?= csrf_field() ?>
        <input type="hidden" name="csrf_token_name" value="csrf_token_value">
        <?php foreach ($questions as $i => $q): ?>
            <div class="mb-3">
                <label><?= ($i + 1) . ". " . $q['question'] ?></label><br>
                <?php foreach (['A', 'B', 'C', 'D'] as $opt): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q<?= $i ?>" value="<?= $opt ?>" required>
                        <label class="form-check-label"><?= $q["option_" . strtolower($opt)] ?></label>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>