<?php
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/functions.php';

function requireLogin()
{
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

// Register a new user
function registerUser($name, $email, $password, $phone = '')
{
    global $pdo;
    if (!$pdo) return ['success' => false, 'error' => 'Database connection failed'];

    try {
        // Check if email already exists
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            return ['success' => false, 'error' => 'Email already registered'];
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $pdo->prepare('INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $email, $hashedPassword, $phone]);
        $userId = $pdo->lastInsertId();

        // Set session
        $_SESSION['user'] = [
            'id' => $userId,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80',
        ];

        return ['success' => true, 'userId' => $userId];
    } catch (Exception $e) {
        return ['success' => false, 'error' => 'Registration failed: ' . $e->getMessage()];
    }
}

// Login user
function loginUser($email, $password)
{
    global $pdo;
    if (!$pdo) return ['success' => false, 'error' => 'Database connection failed'];

    try {
        $stmt = $pdo->prepare('SELECT id, name, email, phone, password FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if (!$user || !password_verify($password, $user['password'])) {
            return ['success' => false, 'error' => 'Invalid email or password'];
        }

        // Set session
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'phone' => $user['phone'],
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80',
        ];

        return ['success' => true, 'userId' => $user['id']];
    } catch (Exception $e) {
        return ['success' => false, 'error' => 'Login failed: ' . $e->getMessage()];
    }
}

// Logout user
function logoutUser()
{
    session_destroy();
    header('Location: index.php');
    exit;
}

// Demo login (fallback for testing without database)
function loginDemoUser($email, $name = 'Travel Guest')
{
    $_SESSION['user'] = [
        'id' => 0,
        'name' => $name,
        'email' => $email,
        'phone' => '',
        'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80',
    ];
}
?>
