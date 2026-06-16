<?php
require_once __DIR__ . '/../config/db.php';

// Utility functions
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function money($amount)
{
    return '$' . number_format((float) $amount, 0);
}

function findById($items, $id)
{
    foreach ($items as $item) {
        if ((int) $item['id'] === (int) $id) {
            return $item;
        }
    }
    return null;
}

function currentUser()
{
    return $_SESSION['user'] ?? null;
}

function isLoggedIn()
{
    return isset($_SESSION['user']);
}

function starRating($rating)
{
    return str_repeat('&#9733;', (int) round($rating));
}

// Database query functions
function getAllDestinations()
{
    global $pdo;
    if (!$pdo) return [];
    try {
        $stmt = $pdo->query('SELECT * FROM destinations ORDER BY rating DESC');
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return [];
    }
}

function getDestinationById($id)
{
    global $pdo;
    if (!$pdo) {
        global $featuredDestinations;
        return findById($featuredDestinations, $id);
    }
    try {
        $stmt = $pdo->prepare('SELECT * FROM destinations WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    } catch (Exception $e) {
        return null;
    }
}

function getAllHotels($destinationId = null)
{
    global $pdo;
    if (!$pdo) return [];
    try {
        if ($destinationId) {
            $stmt = $pdo->prepare('SELECT * FROM hotels WHERE destination_id = ? ORDER BY rating DESC');
            $stmt->execute([$destinationId]);
        } else {
            $stmt = $pdo->query('SELECT * FROM hotels ORDER BY rating DESC');
        }
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return [];
    }
}

function getHotelById($id)
{
    global $pdo;
    if (!$pdo) return null;
    try {
        $stmt = $pdo->prepare('SELECT * FROM hotels WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    } catch (Exception $e) {
        return null;
    }
}

function getAllPackages($destinationId = null)
{
    global $pdo;
    if (!$pdo) {
        global $packages;
        if (!$destinationId) return $packages;

        $destination = getDestinationById($destinationId);
        if (!$destination) return [];

        return array_values(array_filter($packages, function ($package) use ($destination) {
            return ($package['destination'] ?? '') === ($destination['name'] ?? '');
        }));
    }
    try {
        if ($destinationId) {
            $stmt = $pdo->prepare('SELECT * FROM packages WHERE destination_id = ? ORDER BY price ASC');
            $stmt->execute([$destinationId]);
        } else {
            $stmt = $pdo->query('SELECT * FROM packages ORDER BY price ASC');
        }
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return [];
    }
}

function getPackageById($id)
{
    global $pdo;
    if (!$pdo) {
        global $packages;
        return findById($packages, $id);
    }
    try {
        $stmt = $pdo->prepare('SELECT * FROM packages WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    } catch (Exception $e) {
        return null;
    }
}

function getReviews($destinationId = null, $limit = 10)
{
    global $pdo;
    if (!$pdo) return [];
    try {
        if ($destinationId) {
            $stmt = $pdo->prepare('SELECT r.*, u.name FROM reviews r JOIN users u ON r.user_id = u.id WHERE r.destination_id = ? ORDER BY r.created_at DESC LIMIT ?');
            $stmt->execute([$destinationId, $limit]);
        } else {
            $stmt = $pdo->prepare('SELECT r.*, u.name FROM reviews r JOIN users u ON r.user_id = u.id ORDER BY r.created_at DESC LIMIT ?');
            $stmt->execute([$limit]);
        }
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return [];
    }
}

function getFlightAppointments($packageId)
{
    global $flightAppointments;
    return $flightAppointments[(int) $packageId] ?? [];
}

function getUserBookings($userId)
{
    global $pdo;
    if (!$pdo) return [];
    try {
        $stmt = $pdo->prepare('SELECT b.*, p.title, p.image FROM bookings b JOIN packages p ON b.package_id = p.id WHERE b.user_id = ? ORDER BY b.created_at DESC');
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return [];
    }
}

function createBooking($userId, $packageId, $hotelId, $checkIn, $checkOut, $guests, $totalPrice)
{
    global $pdo;
    if (!$pdo) return false;
    try {
        $stmt = $pdo->prepare('INSERT INTO bookings (user_id, package_id, hotel_id, check_in, check_out, guests, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$userId, $packageId, $hotelId, $checkIn, $checkOut, $guests, $totalPrice]);
        return $pdo->lastInsertId();
    } catch (Exception $e) {
        return false;
    }
}

function createReview($userId, $rating, $title, $text, $destinationId = null, $packageId = null)
{
    global $pdo;
    if (!$pdo) return false;
    try {
        $stmt = $pdo->prepare('INSERT INTO reviews (user_id, rating, title, text, destination_id, package_id) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$userId, $rating, $title, $text, $destinationId, $packageId]);
        return $pdo->lastInsertId();
    } catch (Exception $e) {
        return false;
    }
}
?>
