<!DOCTYPE html>
<html lang="sr">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193704911-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-193704911-1');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Tepih servis i dubinsko pranje nameštaja | Beograd | Cena: Već od 160rsd / m2! |  Dolazak na kućnu adresu | Preuzimanje | Preko 20m2 besplatno preuzimanje!">
    <meta name="author" content="Ceda Ivanovic">
    <meta name="copyright" content="tepihservisidubinsko.rs">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="general">

    <!-- OG -->
    <meta property="og:title" content="Tepih servis i dubinsko pranje nameštaja | Pranje tepiha već od 160rsd/m2">
    <meta property="og:site_name" content="Tepih servis i dubinsko pranje nameštaja S&J | Akcija: Cena već od 160 rsd/m2">
    <meta property="og:url" content="https://www.tepihservisidubinsko.rs/">
    <meta property="og:description" content="Tepih servis i dubinsko pranje nameštaja. Cena već od 160RSD po m2! Za 20m2 tepih besplatno preuzimanje na teritoriji Beograda!">
    <meta property="og:type" content="business.business">
    <meta property="og:image" content="https://www.tepihservisidubinsko.rs/assets/img/tepih-servis-i-dubinsko-pranje-social.jpg">
    <meta property="business:contact_data:street_address" content="Radnička 3">
    <meta property="business:contact_data:locality" content="Beograd">
    <meta property="business:contact_data:region" content="Beograd">
    <meta property="business:contact_data:postal_code" content="11030">
    <meta property="business:contact_data:country_name" content="Serbia">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Tepih servis i dubinsko pranje nameštaja | S&J | Akcija: Cena već od 160 rsd/m2">
    <meta name="twitter:site" content="@tepihservisidubinsko">
    <meta name="twitter:description" content="Tepih servis i dubinsko pranje nameštaja. Cena već od 160RSD po m2! Za 20m2 tepih besplatno preuzimanje na teritoriji Beograda!">
    <meta name="twitter:image" content="https://www.tepihservisidubinsko.rs/assets/img/tepih-servis-i-dubinsko-pranje-social.jpg">
    <meta name="twitter:image:alt" content="Tepih servis i dubinsko pranje">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.tepihservisidubinsko.rs/">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9ebe8cbaa6.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Css Files -->
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css?ver=1.0.3">

    <!-- Schema -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "@id": "https://www.tepihservisidubinsko.rs/",
            "name": "Tepih servis i dubinsko pranje namestaja S&J | Akcija: Cena već od 160 rsd/m2",
            "image": "https://www.tepihservisidubinsko.rs/assets/img/tepih-servis-i-dubinsko-pranje-social.jpg",
            "priceRange": "$$",
            "telephone": "+381658700038",
            "url": "https://www.tepihservisidubinsko.rs",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Radnicka 3",
                "addressLocality": "Belgrade",
                "addressRegion": "Belgrade",
                "postalCode": "11030",
                "addressCountry": "Serbia"
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "opens": "08:00",
                "closes": "20:00"
            }],
            "sameAs": ["https://www.facebook.com/SJ-Cleaner-Company-102957035123168", "https://www.instagram.com/s_j_cleaner_company9/"]
        }
    </script>
</head>

<body id="content">