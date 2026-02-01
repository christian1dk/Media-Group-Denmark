<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'db.php';
require_once 'models/Job.php';

// Læs JSON data fra request body
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

// Valider påkrævede felter
$requiredFields = ['title', 'description', 'company', 'location', 'job_type'];
$errors = [];

foreach ($requiredFields as $field) {
    if (!isset($input[$field]) || empty(trim($input[$field]))) {
        $errors[] = "Feltet '$field' er påkrævet.";
    }
}

// Valider job_type (enum i DB)
$allowedJobTypes = ['Fuldtid', 'Deltid', 'Kontrakt', 'Praktik'];
if (isset($input['job_type']) && !in_array($input['job_type'], $allowedJobTypes)) {
    $errors[] = "Ugyldig job_type. Tilladte værdier er: " . implode(", ", $allowedJobTypes);
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'errors' => $errors
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$conn = getDbConnection();
$jobModel = new Job($conn);

$newJobId = $jobModel->createJob($input);

if ($newJobId) {
    http_response_code(201);
    // Hent det nyoprettede job for at returnere det
    $newJob = $jobModel->getJobById($newJobId);
    
    echo json_encode([
        'status' => 'success',
        'message' => 'Jobopslaget blev oprettet korrekt',
        'data' => $newJob
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} else {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Der opstod en fejl under oprettelse af jobopslaget'
    ], JSON_UNESCAPED_UNICODE);
}

$conn->close();
?>
