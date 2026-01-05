<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Tags -->
    <meta name="description"
        content="EHSAAS Cold Drinks - Bringing you the perfect blend of tradition and innovation in refreshing beverages. Quality, taste, and freshness in every sip.">
    <meta name="keywords"
        content="EHSAAS, cold drinks, beverages, refreshment, soda, juice, made in india, soft drinks">
    <meta name="author" content="EHSAAS">
    <meta name="theme-color" content="#E52525">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="EHSAAS Cold Drinks | Feel the Refreshment">
    <meta property="og:description"
        content="Bringing you the perfect blend of tradition and innovation. Quality, taste, and freshness in every sip.">
    <meta property="og:image" content="assets/images/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="EHSAAS Cold Drinks | Feel the Refreshment">
    <meta property="twitter:description"
        content="Bringing you the perfect blend of tradition and innovation. Quality, taste, and freshness in every sip.">
    <meta property="twitter:image" content="assets/images/logo.png">

    <!-- Icons -->
    <link rel="icon" href="assets/images/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/images/logo.png">

    <title>EHSAAS Cold Drinks | Feel the Refreshment</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <!-- Loader Overlay -->
    <div id="loader-overlay">
        <div class="spinner"></div>
    </div>

    <!-- Loader Script -->
    <script>
        window.addEventListener('load', function () {
            const loader = document.getElementById('loader-overlay');
            loader.classList.add('loader-hidden');

            loader.addEventListener('transitionend', function () {
                if (document.body.contains(loader)) {
                    document.body.removeChild(loader);
                }
            });
        });
    </script>


    <!-- ============================================ -->
    <!--                 Navigation                   -->
    <!-- ============================================ -->
    <?php
    $current_page = basename($_SERVER['SCRIPT_NAME']);
    // Debug output to view source
    echo "<!-- Current Page Detected: " . $current_page . " -->";
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="EHSAAS" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"
                            href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>"
                            href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"
                            href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>