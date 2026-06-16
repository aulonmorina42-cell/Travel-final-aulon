<?php $user = currentUser(); ?>
<header class="site-header">
    <a class="brand" href="index.php"><span>Roamly</span><small>Travel</small></a>
    <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">&#9776;</button>
    <nav class="nav-links">
        <a href="destinations.php">Destinations</a>
        <a href="packages.php">Packages</a>
        <a href="hotels.php">Hotels</a>
        <a href="reviews.php">Reviews</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
    <button class="theme-toggle" id="darkModeToggle" aria-label="Toggle dark mode" title="Toggle dark mode">🌙</button>
    <div class="nav-actions">
        <?php if ($user): ?>
            <a class="ghost-button" href="my-bookings.php">Bookings</a>
            <a class="ghost-button" href="profile.php">Profile</a>
            <a class="primary-button small" href="logout.php">Logout</a>
        <?php else: ?>
            <a class="ghost-button" href="login.php">Login</a>
            <a class="primary-button small" href="register.php">Register</a>
        <?php endif; ?>
    </div>
</header>
