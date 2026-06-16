<?php
$pageTitle = 'Login';
require_once __DIR__ . '/includes/auth.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = loginUser($_POST['email'] ?? '', $_POST['password'] ?? '');
    if ($result['success']) {
        header('Location: profile.php');
        exit;
    } else {
        $error = $result['error'] ?? 'Login failed';
    }
}

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <h1>Welcome Back</h1>
    <p>Sign in to your Roamly Travel account</p>
</section>

<section class="content-section" style="max-width: 500px; margin: 48px auto;">
    <?php if ($error): ?>
        <div style="background: #fee; border: 1px solid #fcc; padding: 16px; border-radius: 12px; margin-bottom: 20px; color: #c00;">
            <?= e($error) ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="card">
        <h2>Login to Your Account</h2>
        
        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="primary-button" style="width: 100%;">Sign In</button>

        <p style="text-align: center; margin-top: 20px;">
            Don't have an account? <a href="register.php" style="color: var(--primary); font-weight: 600;">Create one here</a>
        </p>
    </form>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
