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