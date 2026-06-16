<?php
$pageTitle = 'Contact Us';
include __DIR__ . '/includes/header.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In production, send email here
    $message = 'Thank you for your message. We\'ll get back to you soon!';
}
?>

<section class="page-hero">
    <h1>Get in Touch</h1>
    <p>Have questions? We're here to help plan your perfect trip.</p>
</section>

<section class="content-section" style="max-width: 600px; margin: 48px auto;">
    <?php if ($message): ?>
        <div style="background: #efe; border: 1px solid #cfc; padding: 16px; border-radius: 12px; margin-bottom: 20px; color: #0a0;">
            <?= e($message) ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="card">
        <h2>Contact Us</h2>
        
        <div>
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <button type="submit" class="primary-button" style="width: 100%;">Send Message</button>
    </form>

    <div class="card" style="margin-top: 30px; background: var(--surface-alt); text-align: center;">
        <h3>Other Ways to Reach Us</h3>
        <p style="margin: 8px 0;">📧 <strong><?= e(ADMIN_EMAIL) ?></strong></p>
        <p style="margin: 8px 0;">📞 +1 (555) 123-4567</p>
        <p style="margin: 8px 0;">🏢 123 Travel Street, Adventure City</p>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
