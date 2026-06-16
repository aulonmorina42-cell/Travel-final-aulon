<?php
$pageTitle = 'Search';
include __DIR__ . '/includes/header.php';

$query = $_GET['q'] ?? '';
$results = [];

if (!empty($query)) {
    $destinations = getAllDestinations() ?: $featuredDestinations;
    $packages = getAllPackages() ?: $packages;
    
    foreach ($destinations as $dest) {
        if (stripos($dest['name'], $query) !== false || stripos($dest['country'], $query) !== false) {
            $results[] = ['type' => 'destination', 'data' => $dest];
        }
    }
    
    foreach ($packages as $pkg) {
        if (stripos($pkg['title'], $query) !== false || stripos($pkg['type'], $query) !== false) {
            $results[] = ['type' => 'package', 'data' => $pkg];
        }
    }
}
?>

<section class="page-hero">
    <h1>Search</h1>
    <p>Find your perfect destination or travel package</p>
</section>

<section class="content-section" style="max-width: 800px;">
    <form method="GET" class="card" style="margin-bottom: 30px;">
        <div style="display: flex; gap: 10px;">
            <input type="search" name="q" value="<?= e($query) ?>" placeholder="Search destinations, packages, types..." style="flex: 1;" required>
            <button type="submit" class="primary-button">Search</button>
        </div>
    </form>

    <?php if (!empty($query)): ?>
        <?php if (count($results) > 0): ?>
            <div>
                <h2><?= count($results) ?> Result(s) for "<?= e($query) ?>"</h2>
                <div style="display: grid; gap: 20px;">
                    <?php foreach ($results as $result): ?>
                        <?php if ($result['type'] === 'destination'): 
                            $item = $result['data'];
                        ?>
                            <article class="card">
                                <div style="display: grid; grid-template-columns: 150px 1fr; gap: 20px;">
                                    <img src="<?= e($item['image']) ?>" alt="<?= e($item['name']) ?>" style="width: 100%; border-radius: 12px; object-fit: cover;">
                                    <div>
                                        <div class="meta">
                                            <span><?= e($item['country']) ?></span>
                                            <span class="rating"><?= starRating($item['rating']) ?> <?= e($item['rating']) ?></span>
                                        </div>
                                        <h3><?= e($item['name']) ?></h3>
                                        <p><?= e($item['summary']) ?></p>
                                        <a class="primary-button small" href="destination.php?id=<?= e($item['id']) ?>">Learn More →</a>
                                    </div>
                                </div>
                            </article>
                        <?php else: 
                            $item = $result['data'];
                        ?>
                            <article class="card">
                                <div style="display: grid; grid-template-columns: 150px 1fr; gap: 20px;">
                                    <img src="<?= e($item['image']) ?>" alt="<?= e($item['title']) ?>" style="width: 100%; border-radius: 12px; object-fit: cover;">
                                    <div>
                                        <div class="meta">
                                            <span><?= e($item['type']) ?></span>
                                            <span><?= $item['days'] ?> days</span>
                                        </div>
                                        <h3><?= e($item['title']) ?></h3>
                                        <div class="card-foot" style="margin-top: 12px;">
                                            <span class="price"><?= money($item['price']) ?></span>
                                            <a class="primary-button small" href="package.php?id=<?= e($item['id']) ?>">Book Package →</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="card" style="text-align: center; padding: 40px;">
                <p style="color: var(--muted);">No results found for "<?= e($query) ?>"</p>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="card" style="text-align: center; padding: 40px;">
            <p style="color: var(--muted);">Enter a search term to find destinations and packages</p>
        </div>
    <?php endif; ?>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
