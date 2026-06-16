<?php
$pageTitle = 'Book Now';
require_once __DIR__ . '/config/session.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$packageId = $_GET['package'] ?? null;
$package = $packageId ? getPackageById($packageId) : null;

if (!$package) {
    header('Location: packages.php');
    exit;
}

$flightAppointments = getFlightAppointments($package['id']);
$selectedFlight = $_GET['flight'] ?? '';
$bookingSent = $_SERVER['REQUEST_METHOD'] === 'POST';

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero" style="background-image: url('<?= e($package['image']) ?>'); background-size: cover; background-position: center;">
    <div class="hero-panel">
        <p class="eyebrow">Book now</p>
        <h1><?= e($package['title']) ?></h1>
        <p>Select a flight appointment time and send your booking request.</p>
    </div>
</section>

<section class="section booking-layout">
    <div>
        <?php if ($bookingSent): ?>
            <div class="success-banner">
                <strong>Booking request sent.</strong>
                <span>We will confirm your selected flight appointment and trip details by email.</span>
            </div>
        <?php endif; ?>

        <div class="section-header">
            <div>
                <p class="eyebrow">Flight appointments</p>
                <h2>Pick your flight time</h2>
                <p>These are the available departure windows for this package.</p>
            </div>
        </div>

        <div class="flight-list selectable-flights">
            <?php foreach ($flightAppointments as $index => $flight): ?>
                <?php $flightValue = $flight['flight'] . '|' . $flight['date'] . '|' . $flight['depart']; ?>
                <label class="flight-card flight-option" for="flight-<?= e($index) ?>">
                    <input
                        id="flight-<?= e($index) ?>"
                        type="radio"
                        name="flight"
                        value="<?= e($flightValue) ?>"
                        form="booking-form"
                        <?= ($selectedFlight === $flight['flight'] || $index === 0) ? 'checked' : '' ?>
                    >
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
                </label>
            <?php endforeach; ?>
        </div>
    </div>

    <aside class="card booking-form-card">
        <h2>Booking request</h2>
        <p class="muted">Package total starts at <strong><?= money($package['price']) ?></strong>.</p>

        <form id="booking-form" action="booking.php?package=<?= e($package['id']) ?>" method="post">
            <div>
                <label for="name">Full name</label>
                <input id="name" name="name" type="text" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required>
            </div>
            <div class="form-row">
                <div>
                    <label for="guests">Guests</label>
                    <input id="guests" name="guests" type="number" min="1" value="1" required>
                </div>
                <div>
                    <label for="date">Trip date</label>
                    <input id="date" name="date" type="date" required>
                </div>
            </div>
            <div>
                <label for="notes">Notes</label>
                <textarea id="notes" name="notes" placeholder="Hotel preferences, airport needs, or special requests"></textarea>
            </div>
            <button class="primary-button" type="submit">Send Booking Request</button>
        </form>
    </aside>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
