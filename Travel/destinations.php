<?php
$pageTitle = 'Destinations';
include __DIR__ . '/includes/header.php';
$destinations = getAllDestinations() ?: $featuredDestinations;
?>

<section class="page-hero">
    <h1>Explore Destinations</h1>
    <p>Discover your next unforgettable journey from our curated collection of world-class destinations.</p>
</section>

<section class="section">
    <div class="destination-grid">
        <?php foreach ($destinations as $destination): ?>
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

<?php include __DIR__ . '/includes/footer.php'; ?>
