<?php
$pageTitle = 'Hotels';
include __DIR__ . '/includes/header.php';
$hotels_list = getAllHotels() ?: $hotels;
?>

<section class="page-hero">
    <h1>Premium Hotels</h1>
    <p>Stay at luxury accommodations handpicked for their location, service, and unforgettable experiences.</p>
</section>

<section class="section">
    <div class="hotel-grid">
        <?php foreach ($hotels_list as $hotel): ?>
            <article class="hotel-card">
                <img src="<?= e($hotel['image']) ?>" alt="<?= e($hotel['name']) ?>">
                <div>
                    <div class="meta">
                        <span><?= e($hotel['destination'] ?? 'Hotel') ?></span>
                        <span class="rating"><?= starRating($hotel['rating']) ?> <?= e($hotel['rating']) ?></span>
                    </div>
                    <h3><?= e($hotel['name']) ?></h3>
                    <p><?= e($hotel['description'] ?? 'Experience luxury and comfort at this premier destination') ?></p>
                    <div class="card-foot">
                        <span class="price"><?= money($hotel['price']) ?>/night</span>
                        <a class="primary-button small" href="hotel.php?id=<?= e($hotel['id']) ?>">View Details →</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
