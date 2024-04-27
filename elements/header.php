<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShexWeeknd | Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo192.png" />
    <link rel="stylesheet" href="../assets/css/shexweeknd.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php
    if (isset($canonical)) {
        echo '<link rel="canonical" href="' . $canonical . '"/>' . PHP_EOL;
    }

    //Facebook meta tags
    if (isset($ogg_site)) {
        echo '<meta property="og:site_name" content="' . $ogg_site . '"/>' . PHP_EOL;
    }
    if (isset($ogg_title)) {
        echo '<meta property="og:title" content="' . $ogg_title . '"/>' . PHP_EOL;
    }
    if (isset($ogg_type)) {
        echo '<meta property="og:type" content="' . $ogg_type . '"/>' . PHP_EOL;
    }
    if (isset($ogg_url)) {
        echo '<meta property="og:url" content="' . $ogg_url . '"/>' . PHP_EOL;
    }
    if (isset($ogg_website)) {
        echo '<meta property="og:type" content="' . $ogg_website . '"/>' . PHP_EOL;
    }
    if (isset($ogg_image)) {
        echo '<meta property="og:image" content="' . $ogg_image . '"/>' . PHP_EOL;
    }
    if (isset($ogg_image_width)) {
        echo '<meta property="og:image:width" content="' . $ogg_image_width . '"/>' . PHP_EOL;
    }
    if (isset($ogg_image_height)) {
        echo '<meta property="og:image:height" content="' . $ogg_image_height . '"/>' . PHP_EOL;
    }


    if (isset($ogg_description)) {
        echo '<meta property="og:description" content="' . $ogg_description . '"/>' . PHP_EOL;
    }

    //itemprop meta tags
    if (isset($meta_name)) {
        echo '<meta itemprop="name" content="' . $meta_name . '"/>' . PHP_EOL;
    }
    if (isset($meta_url)) {
        echo '<meta itemprop="url" content="' . $meta_url . '"/>' . PHP_EOL;
    }
    if (isset($meta_description)) {
        echo '<meta itemprop="description" content="' . $meta_description . '"/>' . PHP_EOL;
    }
    if (isset($meta_thumbnailUrl)) {
        echo '<meta itemprop="thumbnailUrl" content="' . $meta_thumbnailUrl . '"/>' . PHP_EOL;
    }

    //twitter meta tags
    if (isset($meta_twitter_title)) {
        echo '<meta name="twitter:title" content="' . $meta_twitter_title . '"/>' . PHP_EOL;
    }
    if (isset($meta_twitter_url)) {
        echo '<meta name="twitter:url" content="' . $meta_twitter_url . '"/>' . PHP_EOL;
    }
    if (isset($meta_twitter_image)) {
        echo '<meta name="twitter:image" content="' . $meta_twitter_image . '"/>' . PHP_EOL;
    }
    if (isset($meta_twitter_card)) {
        echo '<meta name="twitter:card" content="' . $meta_twitter_card . '"/>' . PHP_EOL;
    }
    if (isset($meta_twitter_description)) {
        echo '<meta name="twitter:description" content="' . $meta_twitter_description . '"/>' . PHP_EOL;
    }
    ?>
</head>

<link rel="stylesheet" href="../assets/css/nav.css">
<link rel="stylesheet" href="../assets/css/menu-dropdown.css">

<body class="bg-acceuil">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <!-- <?php
            include_once 'elements/logo.php';
            ?> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#acceuil">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item dropdown menu">
                        <span class="nav-link" href="#">Compétences</span>
                        <ul class="menu-dropdown">
                            <li><a class="dropdown-item" href="#compdev">Dev</a></li>
                            <li><a class="dropdown-item" href="#compsys">SysAdmin</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
