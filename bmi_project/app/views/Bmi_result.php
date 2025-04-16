<?php if (isset($result)): ?>
<div class="card mt-4">
    <div class="card-body">
        <h4>BMI Result for <?= htmlspecialchars($result['name']) ?></h4>
        <p>Weight: <?= $result['weight'] ?> kg</p>
        <p>Height: <?= $result['height'] ?> cm</p>
        <p>BMI: <strong><?= $result['bmi'] ?></strong></p>
        <p>Status: <strong><?= $result['status'] ?></strong></p>
    </div>
</div>
<?php endif; ?>

