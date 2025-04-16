<?php
require '../config/database.php';
require '../app/models/BmiModel.php';
require '../app/controllers/BmiController.php';

$model = new BmiModel($db);
$controller = new BmiController($model);
$result = null;

session_start();
$user_id = $_SESSION['user_id'] ?? 1; // placeholder for now

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $controller->calculateBmi($user_id, $_POST['name'], $_POST['weight'], $_POST['height']);
}

require '../app/views/bmi_form.php';
require '../app/views/bmi_result.php';
?>
