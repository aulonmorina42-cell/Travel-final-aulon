<?php
$pageTitle = 'Reviews';
include __DIR__ . '/includes/header.php';
$reviews_list = getReviews(null, 20) ?: $reviews;
?>

<section class="page-hero">
    <h1>Guest Reviews</h1>
    <p>Read what travelers say about their unforgettable journeys with Roamly Travel.</p>
</section>

<section class="section" style="max-width: 800px; margin: 48px auto;">
    <?php foreach ($reviews_list as $review): ?>
        <article class="card" style="margin-bottom: 20px;">
            <div class="meta">
                <strong><?= e($review['name']) ?></strong>
                <span class="rating"><?= starRating($review['rating']) ?> <?= e($review['rating']) ?>/5</span>
            </div>
            <h3><?= e($review['title'] ?? 'Amazing Experience') ?></h3>
            <p><?= e($review['text']) ?></p>
        </article>
    <?php endforeach; ?>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
