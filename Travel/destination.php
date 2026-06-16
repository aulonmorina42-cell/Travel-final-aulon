<?php
$pageTitle = 'Destination Details';
include __DIR__ . '/includes/header.php';

$id = $_GET['id'] ?? null;
$destination = $id ? getDestinationById($id) : null;

if (!$destination) {
    header('Location: destinations.php');
    exit;
}

$hotels = getAllHotels($id) ?: [];
$destinationPackages = getAllPackages($id) ?: [];
$reviews = getReviews($id, 5) ?: [];
?>

<section class="page-hero" style="background-image: url('<?= e($destination['image']) ?>'); background-size: cover; background-position: center;">
    <div class="hero-panel">
        <h1><?= e($destination['name']) ?></h1>
        <p><?= e($destination['summary']) ?></p>
    </div>
</section>

<section class="section">
    <div class="detail-layout">
        <div>
            <h2>About <?= e($destination['name']) ?></h2>
            <p><?= e($destination['description'] ?? $destination['summary']) ?></p>
            <h3>Duration</h3>
            <p><?= e($destination['duration']) ?></p>
        </div>
        <aside class="card booking-summary">
            <h3>Quick Info</h3>
            <div class="summary-list">
                <div>
                    <p>Country</p>
                    <strong><?= e($destination['country']) ?></strong>
                </div>
                <div>
                    <p>Rating</p>
                    <span class="rating"><?= starRating($destination['rating']) ?> <?= e($destination['rating']) ?>/5</span>
                </div>
                <div>
                    <p>Starting Price</p>
                    <strong class="price"><?= money($destination['price']) ?></strong>
                </div>
                <?php if (count($destinationPackages) > 0): ?>
                    <a class="primary-button" href="booking.php?package=<?= e($destinationPackages[0]['id']) ?>">Book Now</a>
                <?php else: ?>
                    <a class="primary-button" href="packages.php">View Packages</a>
                <?php endif; ?>
            </div>
        </aside>
    </div>
</section>

<?php if (count($hotels) > 0): ?>
<section class="section">
    <h2>Featured Hotels</h2>
    <div class="hotel-grid">
        <?php foreach (array_slice($hotels, 0, 3) as $hotel): ?>
            <article class="hotel-card">
                <img src="<?= e($hotel['image']) ?>" alt="<?= e($hotel['name']) ?>">
                <div>
                    <h3><?= e($hotel['name']) ?></h3>
                    <p><?= e($hotel['description'] ?? '') ?></p>
                    <div class="card-foot">
                        <span class="price"><?= money($hotel['price']) ?>/night</span>
                        <a class="primary-button small" href="hotel.php?id=<?= e($hotel['id']) ?>">View Hotel</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php if (count($destinationPackages) > 0): ?>
<section class="section">
    <div class="section-header">
        <div>
            <p class="eyebrow">Book this destination</p>
            <h2>Available Packages</h2>
            <p>Pick a package and choose a flight appointment time on the booking page.</p>
        </div>
    </div>
    <div class="package-grid">
        <?php foreach (array_slice($destinationPackages, 0, 3) as $package): ?>
            <article class="package-card">
                <img src="<?= e($package['image']) ?>" alt="<?= e($package['title']) ?>">
                <div>
                    <h3><?= e($package['title']) ?></h3>
                    <div class="card-foot">
                        <span class="price"><?= money($package['price']) ?></span>
                        <a class="primary-button small" href="booking.php?package=<?= e($package['id']) ?>">Book Now</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php if (count($reviews) > 0): ?>
<section class="section review-section">
    <h2>Guest Reviews</h2>
    <div class="review-stack">
        <?php foreach ($reviews as $review): ?>
            <div class="card">
                <div class="meta">
                    <strong><?= e($review['name']) ?></strong>
                    <span class="rating"><?= starRating($review['rating']) ?></span>
                </div>
                <p><?= e($review['text']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
