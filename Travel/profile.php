<?php
$pageTitle = 'Profile';
require_once __DIR__ . '/includes/auth.php';
requireLogin();
$user = currentUser();

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <h1>Your Profile</h1>
    <p>Manage your account and travel history</p>
</section>

<section class="content-section" style="max-width: 1000px;">
    <div class="card" style="margin-bottom: 30px;">
        <div style="display: flex; align-items: center; gap: 20px;">
            <img src="<?= e($user['avatar']) ?>" alt="<?= e($user['name']) ?>" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
            <div>
                <h2 style="margin: 0 0 8px;"><?= e($user['name']) ?></h2>
                <p style="margin: 0; color: var(--muted);"><?= e($user['email']) ?></p>
                <?php if (!empty($user['phone'])): ?>
                    <p style="margin: 4px 0 0; color: var(--muted);"><?= e($user['phone']) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="section-header">
        <h2>Your Bookings</h2>
        <a class="primary-button" href="packages.php">Book Now</a>
    </div>

    <?php 
    $bookings = getUserBookings($user['id'] ?? 0) ?: [];
    if (count($bookings) > 0): 
    ?>
        <div style="display: grid; gap: 20px;">
            <?php foreach ($bookings as $booking): ?>
                <article class="card">
                    <div style="display: grid; grid-template-columns: 150px 1fr; gap: 20px; align-items: start;">
                        <img src="<?= e($booking['image']) ?>" alt="<?= e($booking['title']) ?>" style="width: 100%; border-radius: 12px; object-fit: cover;">
                        <div>
                            <div class="meta">
                                <span><?= ucfirst($booking['status']) ?></span>
                                <span><?= date('M d, Y', strtotime($booking['check_in'])) ?></span>
                            </div>
                            <h3><?= e($booking['title']) ?></h3>
                            <p style="margin: 8px 0 0; color: var(--muted);"><?= $booking['guests'] ?> guest(s) • <?= (strtotime($booking['check_out']) - strtotime($booking['check_in'])) / 86400 ?> nights</p>
                            <div class="card-foot" style="margin-top: 12px;">
                                <span class="price"><?= money($booking['total_price']) ?></span>
                                <a class="text-link" href="#">View details</a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="card" style="text-align: center; padding: 40px;">
            <p style="color: var(--muted); margin-bottom: 20px;">You haven't made any bookings yet.</p>
            <a class="primary-button" href="packages.php">Explore Packages</a>
        </div>
    <?php endif; ?>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
