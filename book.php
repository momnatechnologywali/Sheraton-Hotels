<?php
header('Content-Type: application/json');
require 'db.php';
 
try {
    $data = json_decode(file_get_contents('php://input'), true);
 
    $stmt = $pdo->prepare("INSERT INTO bookings (hotel_id, user_name, user_email, hotel_name, room_type, guests) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $data['hotelId'],
        $data['userName'],
        $data['userEmail'],
        $data['hotelName'],
        $data['roomType'],
        $data['guests']
    ]);
 
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
