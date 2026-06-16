<?php
$pageTitle = 'Register';
require_once __DIR__ . '/includes/auth.php';

$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = registerUser(
        $_POST['name'] ?? '',
        $_POST['email'] ?? '',
        $_POST['password'] ?? '',
        $_POST['phone'] ?? ''
    );
    if ($result['success']) {
        $success = 'Account created successfully! Redirecting...';
        header('Refresh: 2; url=profile.php');
    } else {
        $error = $result['error'] ?? 'Registration failed';
    }
}

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <h1>Join Roamly Travel</h1>
    <p>Create your account and start planning your dream journey</p>
</section>

<section class="content-section" style="max-width: 500px; margin: 48px auto;">
    <?php if ($error): ?>
        <div style="background: #fee; border: 1px solid #fcc; padding: 16px; border-radius: 12px; margin-bottom: 20px; color: #c00;">
            <?= e($error) ?>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div style="background: #efe; border: 1px solid #cfc; padding: 16px; border-radius: 12px; margin-bottom: 20px; color: #0a0;">
            <?= e($success) ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="card">
        <h2>Create Your Account</h2>
        
        <div>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="phone">Phone (Optional)</label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="primary-button" style="width: 100%;">Create Account</button>

        <p style="text-align: center; margin-top: 20px;">
            Already have an account? <a href="login.php" style="color: var(--primary); font-weight: 600;">Sign in here</a>
        </p>
    </form>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
