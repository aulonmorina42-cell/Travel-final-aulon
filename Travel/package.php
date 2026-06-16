<?php
$pageTitle = 'Package Details';
include __DIR__ . '/includes/header.php';

$id = $_GET['id'] ?? null;
$package = $id ? getPackageById($id) : null;

if (!$package) {
    header('Location: packages.php');
    exit;
}

$flightAppointments = getFlightAppointments($package['id']);
$description = $package['description'] ?? 'A curated ' . $package['days'] . '-day trip to ' . ($package['destination'] ?? 'your destination') . '.';
$itinerary = $package['itinerary'] ?? "Arrival and hotel check-in\nGuided local highlights\nFree time for dining and exploring\nReturn flight appointment";
?>

<section class="page-hero" style="background-image: url('<?= e($package['image']) ?>'); background-size: cover; background-position: center;">
    <div class="hero-panel">
        <h1><?= e($package['title']) ?></h1>
        <p><?= e($description) ?></p>
    </div>
</section>

<section class="section">
    <div class="detail-layout">
        <div>
            <h2>Itinerary</h2>
            <p><?= nl2br(e($itinerary)) ?></p>
        </div>
        <aside class="card booking-summary">
            <h3>Package Details</h3>
            <div class="summary-list">
                <div>
                    <p>Duration</p>
                    <strong><?= e($package['days']) ?> days</strong>
                </div>
                <div>
                    <p>Package Type</p>
                    <strong><?= e($package['type'] ?? 'Travel') ?></strong>
                </div>
                <div>
                    <p>Price</p>
                    <strong class="price"><?= money($package['price']) ?></strong>
                </div>
                <a class="primary-button" href="booking.php?package=<?= e($package['id']) ?>">Book Now</a>
            </div>
        </aside>
    </div>
</section>

<?php if (count($flightAppointments) > 0): ?>
<section class="section">
    <div class="section-header">
        <div>
            <p class="eyebrow">Flight appointments</p>
            <h2>Available flight times</h2>
            <p>Choose a departure window before you finish booking this package.</p>
        </div>
        <a class="primary-button small" href="booking.php?package=<?= e($package['id']) ?>">Book Now</a>
    </div>
    <div class="flight-list">
        <?php foreach ($flightAppointments as $flight): ?>
            <article class="flight-card">
                <div class="flight-time">
                    <strong><?= e($flight['depart']) ?></strong>
                    <span><?= e($flight['date']) ?></span>
                </div>
                <div>
                    <h3><?= e($flight['flight']) ?></h3>
                    <p><?= e($flight['route']) ?></p>
                </div>
                <div class="flight-arrival">
                    <span>Arrives</span>
                    <strong><?= e($flight['arrive']) ?></strong>
                    <small><?= e($flight['status']) ?></small>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
