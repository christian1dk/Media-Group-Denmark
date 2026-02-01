<?php
// En simpel router
$request = $_SERVER['REQUEST_URI'];
$basePath = ''; // Hvis projektet ligger i en undermappe, tilføj den her

// Fjern query strings (det efter ?)
$request = strtok($request, '?');

// Definer vores ruter
switch ($request) {
    case '/':
    case '/index':
    case '/index.php':
        require __DIR__ . '/index.php';
        break;
    
    case '/api/jobs':
        require __DIR__ . '/api/jobs.php';
        break;

    default:
        http_response_code(404);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => 'error',
            'message' => 'Ruten blev ikke fundet (404)'
        ]);
        break;
}
?>