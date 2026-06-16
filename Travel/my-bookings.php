<?php
$pageTitle = 'My Bookings';
require_once __DIR__ . '/includes/auth.php';
requireLogin();
$user = currentUser();
$bookings = getUserBookings($user['id'] ?? 0) ?: [];

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <h1>My Bookings</h1>
    <p>Track and manage all your travel reservations</p>
</section>

<section class="content-section" style="max-width: 1000px;">
    <?php if (count($bookings) > 0): ?>
        <div style="display: grid; gap: 20px;">
            <?php foreach ($bookings as $booking): ?>
                <article class="card">
                    <div style="display: grid; grid-template-columns: 150px 1fr; gap: 20px;">
                        <img src="<?= e($booking['image']) ?>" alt="<?= e($booking['title']) ?>" style="width: 100%; border-radius: 12px; object-fit: cover;">
                        <div>
                            <div class="meta">
                                <span style="background: <?= $booking['status'] === 'confirmed' ? '#efe' : '#fee' ?>; padding: 4px 12px; border-radius: 999px;">
                                    <?= ucfirst($booking['status']) ?>
                                </span>
                                <span><?= date('M d, Y', strtotime($booking['check_in'])) ?></span>
                            </div>
                            <h3><?= e($booking['title']) ?></h3>
                            <p style="margin: 8px 0; color: var(--muted);"><?= $booking['guests'] ?> guest(s) • <?= (strtotime($booking['check_out']) - strtotime($booking['check_in'])) / 86400 ?> nights</p>
                            <div class="card-foot" style="margin-top: 12px;">
                                <span class="price"><?= money($booking['total_price']) ?></span>
                                <a class="text-link" href="#">Modify</a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="card" style="text-align: center; padding: 40px;">
            <p style="color: var(--muted); margin-bottom: 20px;">No bookings yet. Start your journey!</p>
            <a class="primary-button" href="packages.php">Browse Packages</a>
        </div>
    <?php endif; ?>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
