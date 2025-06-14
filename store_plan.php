<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $_SESSION['plan_name'] = $_POST['plan_name'];
    $_SESSION['plan_price'] = $_POST['plan_price'];
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
