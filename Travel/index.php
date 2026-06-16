<?php
$pageTitle = 'Home';
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div>
        <p class="eyebrow">Curated travel planning</p>
        <h1><?= e(SITE_NAME) ?></h1>
        <p><?= e(SITE_TAGLINE) ?></p>
        <div class="hero-actions">
            <a class="primary-button" href="packages.php">Explore packages</a>
            <a class="ghost-button light" href="destinations.php">View destinations</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-header">
        <div>
            <p class="eyebrow">Popular escapes</p>
            <h2>Featured destinations</h2>
            <p>Handpicked places with strong hotels, smooth pacing, and enough free time to make the trip feel like yours.</p>
        </div>
        <a class="ghost-button" href="destinations.php">See all</a>
    </div>

    <div class="destination-grid">
        <?php foreach ($featuredDestinations as $destination): ?>
            <article class="destination-card">
                <img src="<?= e($destination['image']) ?>" alt="<?= e($destination['name']) ?>">
                <div>
                    <div class="meta">
                        <span><?= e($destination['country']) ?></span>
                        <span><?= e($destination['duration']) ?></span>
                        <span class="rating"><?= starRating($destination['rating']) ?> <?= e($destination['rating']) ?></span>
                    </div>
                    <h3><?= e($destination['name']) ?></h3>
                    <p><?= e($destination['summary']) ?></p>
                    <div class="card-foot">
                        <span class="price">From <?= money($destination['price']) ?></span>
                        <a class="primary-button small" href="destination.php?id=<?= e($destination['id']) ?>">View Trip</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section split-section">
    <div>
        <p class="eyebrow">Why Roamly</p>
        <h2>Travel that feels planned, not packed.</h2>
        <p>Roamly blends destination research, comfortable stays, and clear booking details into trips that are easy to compare and simple to reserve.</p>
    </div>
    <div class="feature-list">
        <div>
            <strong>Curated hotels</strong>
            <span>Stay options are matched to location, comfort, and trip style.</span>
        </div>
        <div>
            <strong>Clear pricing</strong>
            <span>Package and hotel prices are visible before you commit.</span>
        </div>
        <div>
            <strong>Memorable pacing</strong>
            <span>Each itinerary balances highlights with room to explore.</span>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-header">
        <div>
            <p class="eyebrow">Guest picks</p>
            <h2>Top packages</h2>
        </div>
        <a class="ghost-button" href="packages.php">Browse packages</a>
    </div>

    <div class="package-grid">
        <?php foreach (array_slice($packages, 0, 3) as $package): ?>
            <article class="package-card">
                <img src="<?= e($package['image']) ?>" alt="<?= e($package['title']) ?>">
                <div>
                    <div class="meta">
                        <span><?= e($package['destination']) ?></span>
                        <span><?= e($package['days']) ?> days</span>
                        <span><?= e($package['type']) ?></span>
                    </div>
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

<?php include __DIR__ . '/includes/footer.php'; ?>
