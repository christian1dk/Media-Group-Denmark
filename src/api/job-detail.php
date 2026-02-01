<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'db.php';
require_once 'models/Job.php';

// $jobId kommer fra router.php
if (!isset($jobId)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Manglende job ID'], JSON_UNESCAPED_UNICODE);
    exit;
}

$conn = getDbConnection();
$jobModel = new Job($conn);

$job = $jobModel->getJobById((int)$jobId);

if (!$job) {
    http_response_code(404);
    echo json_encode(['status' => 'error', 'message' => 'Jobopslaget blev ikke fundet'], JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode([
        'status' => 'success',
        'data' => $job
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

$conn->close();
?>
