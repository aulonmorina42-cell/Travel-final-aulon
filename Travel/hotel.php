<?php
$pageTitle = 'Hotel Details';
include __DIR__ . '/includes/header.php';

$id = $_GET['id'] ?? null;
$hotel = $id ? getHotelById($id) : null;

if (!$hotel) {
    header('Location: hotels.php');
    exit;
}
?>

<section class="page-hero" style="background-image: url('<?= e($hotel['image']) ?>'); background-size: cover; background-position: center;">
    <div style="background: rgba(0,0,0,0.4); padding: 60px 30px; border-radius: 12px;">
        <h1 style="color: white;"><?= e($hotel['name']) ?></h1>
        <p style="color: rgba(255,255,255,0.9);"><?= e($hotel['address'] ?? '') ?></p>
    </div>
</section>

<section class="section">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        <div>
            <h2>About This Hotel</h2>
            <p><?= e($hotel['description']) ?></p>
            
            <h3>Amenities</h3>
            <ul style="margin: 0; padding-left: 20px;">
                <?php foreach (explode(',', $hotel['amenities'] ?? '') as $amenity): ?>
                    <li><?= e(trim($amenity)) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="card">
            <h3>Booking Info</h3>
            <div style="display: grid; gap: 16px;">
                <div>
                    <p style="margin: 0; color: var(--muted); font-size: 0.9rem;">Location</p>
                    <strong><?= e($hotel['address'] ?? 'Hotel') ?></strong>
                </div>
                <div>
                    <p style="margin: 0; color: var(--muted); font-size: 0.9rem;">Rating</p>
                    <span class="rating"><?= starRating($hotel['rating']) ?> <?= e($hotel['rating']) ?>/5</span>
                </div>
                <div>
                    <p style="margin: 0; color: var(--muted); font-size: 0.9rem;">Price Per Night</p>
                    <strong style="font-size: 1.4rem; color: var(--primary);"><?= money($hotel['price']) ?></strong>
                </div>
                <button class="primary-button" style="width: 100%;">Book Room</button>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
