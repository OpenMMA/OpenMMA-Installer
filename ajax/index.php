<?php
require_once '../pages/classes.php';

// Start session
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'invalid_method']);
    die();
}

if (!isset($_POST)) {
    echo json_encode(['status' => 'missing_parameters']);
    die();
}

$status = (new $STEPS[$_SESSION['step']])->submit() ? 'success' : 'fail';
echo json_encode(['status' => $status]);
