<?php
// Global visitor counter API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$counterFile = '../data/counter.txt';

// Create data directory if it doesn't exist
if (!file_exists('../data')) {
    mkdir('../data', 0755, true);
}

// Initialize counter file if it doesn't exist
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// Read current count
$count = (int)file_get_contents($counterFile);

// Handle POST request to increment counter
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count++;
    file_put_contents($counterFile, $count);
}

// Return current count
echo json_encode(['count' => $count]);
?>
