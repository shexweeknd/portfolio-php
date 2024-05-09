<!DOCTYPE html>
<html lang="fr">

<?php
//meta tags
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$canonical = $actual_link;

//Facebook meta tags
$ogg_site = 'ShexWeeknd | Portfolio';
$ogg_title = 'ShexWeeknd | Portfolio';
$ogg_url = $actual_link;
//$ogg_website = '';
$ogg_type = 'website';
$ogg_description = 'Consultez le site Portfolio de ShexWeeknd (aka hramaros). Un informaticien polyvalent | Éternel étudiant de la Tech a l\'École 42 Antananarivo.';
$ogg_image = 'assets/img/logo192.png';
$ogg_image_width = '288';
$ogg_image_height = '44';

//other meta
$meta_name = 'ShexWeeknd | Portfolio';
$meta_url = $actual_link;
$meta_description = 'Consultez le site Portfolio de ShexWeeknd (aka hramaros). Un informaticien polyvalent | Éternel étudiant de la Tech a l\'École 42 Antananarivo.';
$meta_thumbnailUrl = 'assets/img/logo192.png';

//twitter meta
$meta_twitter_title = 'ShexWeeknd | Portfolio';
$meta_twitter_image = 'assets/img/logo192.png';
$meta_twitter_url = $actual_link;
$meta_twitter_card = 'summary';
$meta_twitter_description = $meta_description;
include_once 'elements/header.php';
?>

<?php
include_once 'elements/cvDialog.php';
include_once 'elements/acceuil.php';
include_once 'elements/profil.php';
include_once 'elements/compDev.php';
include_once 'elements/compSys.php';
// include_once 'elements/portfolio.php';
include_once 'elements/contact.php';
include_once 'elements/footer.php';
?>
</body>
</html>

<script>
    AOS.init({
        duration: 1500,
    });
</script>

<style>
    /* responsive */
    @media screen and (max-width: 980px) {

        p, input[type="text"], span, a {
            font-size: 0.8rem;
        }

        .acceuil .image-container {
            right: 0;
        }

        .acceuil .gauche {
            transform: translate(-100%, 10%);
        }

        .acceuil .paragraph-light {
            min-width: 60vw;
        }

        .acceuil .styled-link {
            display: none;
        }

        .profil .wrap:hover .overlay {
            transform: translateX(-150vw);
        }

        .profil .text {
            width: 100%;
            padding: 1rem 1rem;
        }

        .profil .wrap {
            border: unset;
            border-radius: 0px;
        }

    .compdev .competences .intro {
        display: none;
    }

    .compdev .competences .competences-content {
        display: none;
    }

    .compdev .cv .button-container {
        margin-top: 150%;
    }

    .compdev .cv .cv-image {
        width: 100%;
        transform: translate(-20%, 0%);
    }

    .compsys .competences .intro {
        display: none;
    }

    .compsys .competences .competences-content {
        display: none;
    }

    .compsys .cv .button-container {
        margin-top: 150%;
    }

    .compsys .cv .cv-image {
        /* width: 60%; */
        width: 100%;
        transform: translate(-20%, 0%);
    }

    .contact {
        margin-top: 0;
    }

    .footer .footer-content {
        scale: 0.5;
        position: relative;
        transform: translate(0%, 0%);
        left: 0;
        top: 0
    }
}
</style>