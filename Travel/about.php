<?php
$pageTitle = 'About Us';
include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <h1>About Roamly Travel</h1>
    <p>Curated escapes, simple booking, memorable stays.</p>
</section>

<section class="content-section" style="max-width: 900px;">
    <div class="card" style="margin-bottom: 30px;">
        <h2>Our Story</h2>
        <p>Roamly Travel was founded on a simple belief: travel should be effortless. We partner with the world's best hotels, local guides, and experience providers to create journeys that feel authentic, comfortable, and unforgettable.</p>
        <p>Every package we offer is carefully curated by our team of travel experts who have visited each destination, stayed in every hotel, and tested every experience.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
        <div class="card">
            <h3 style="text-align: center;">✈️ Destinations</h3>
            <p style="text-align: center;">Handpicked locations across 6 continents</p>
        </div>
        <div class="card">
            <h3 style="text-align: center;">🏨 Hotels</h3>
            <p style="text-align: center;">Premium accommodations in every destination</p>
        </div>
        <div class="card">
            <h3 style="text-align: center;">👥 Support</h3>
            <p style="text-align: center;">24/7 customer support for peace of mind</p>
        </div>
    </div>

    <div class="card">
        <h2>Our Commitment</h2>
        <ul style="margin: 0; padding-left: 20px;">
            <li>Quality accommodations and experiences</li>
            <li>Transparent, all-inclusive pricing</li>
            <li>Expert local guides and planners</li>
            <li>Flexible booking and cancellation policies</li>
            <li>Sustainable and ethical travel practices</li>
        </ul>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
