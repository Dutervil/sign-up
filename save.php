<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set the response content type to JSON
header('Content-Type: application/json');
// Database connection
$conn = new mysqli('127.0.0.1', 'root', 'root', 'signup', 3307);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
}

// Get the JSON input
$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Username already exists
    echo json_encode(['success' => false, 'message' => 'Username already taken. Please choose another one.']);
    exit();
}

$email = $data['email'];
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Email already exists
    echo json_encode(['success' => false, 'message' => 'Email already taken. Please choose another one.']);
    exit();
}
// Validate JSON input
if (json_last_error() !== JSON_ERROR_NONE || !$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid JSON input']);
    exit;
}

// Prepare and execute SQL statement
$stmt = $conn->prepare("
    INSERT INTO users (firstname, lastname, othernames, email, phone, address, birthdate, gender, country, username, password)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Failed to prepare statement: ' . $conn->error]);
    exit;
}
$password = password_hash($data['password'], PASSWORD_DEFAULT);
$stmt->bind_param(
    "sssssssssss",
    $data['firstname'],
    $data['lastname'],
    $data['othernames'],
    $data['email'],
    $data['number'],
    $data['address'],
    $data['birthdate'],
    $data['gender'],
    $data['country'],
    $data['username'],
    $password

);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'User saved successfully']);
    exit;
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to save user: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>