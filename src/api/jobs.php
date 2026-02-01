<?php
header('Content-Type: application/json; charset=utf-8');
require_once '../db.php';
require_once '../models/Job.php';

// Hent databaseforbindelse
$conn = getDbConnection();
$jobModel = new Job($conn);
$jobs = $jobModel->getAllJobs();

if ($jobs === null) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Fejl ved hentning af jobopslag.'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

echo json_encode([
    'status' => 'success',
    'count' => count($jobs),
    'data' => $jobs
]);

$conn->close();
?>