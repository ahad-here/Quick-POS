<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale System</title>
    <meta name="description" content="QuickPOS — the last point-of-sale system you'll ever need. Streamline sales, manage inventory in real-time, and grow your business.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- NAVIGATION BAR -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <!-- HERO SECTION -->
        <?php include __DIR__ . '/includes/hero.php'; ?>

        <!-- FEATURES SECTION -->
        <?php include __DIR__ . '/includes/features.php'; ?>
    </main>

    <!-- FOOTER SECTION -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html>
