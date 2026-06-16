<?php
$pageTitle = 'Packages';
include __DIR__ . '/includes/header.php';
$packages = getAllPackages() ?: $packages;
?>

<section class="page-hero">
    <h1>Travel Packages</h1>
    <p>Carefully curated multi-day experiences designed for comfort, adventure, and unforgettable memories.</p>
</section>

<section class="section">
    <div class="package-grid">
        <?php foreach ($packages as $package): ?>
            <article class="package-card">
                <img src="<?= e($package['image']) ?>" alt="<?= e($package['title']) ?>">
                <div>
                    <div class="meta">
                        <span><?= e($package['type']) ?></span>
                        <span><?= e($package['days']) ?> days</span>
                    </div>
                    <h3><?= e($package['title']) ?></h3>
                    <p><?= e($package['description'] ?? 'Experience the best of ' . ($package['destination'] ?? 'this destination')) ?></p>
                    <div class="card-foot">
                        <span class="price"><?= money($package['price']) ?></span>
                        <a class="primary-button small" href="booking.php?package=<?= e($package['id']) ?>">Book Now</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
