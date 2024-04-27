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
include_once 'elements/portfolio.php';
include_once 'elements/contact.php';
include_once 'elements/footer.php';
?>
</body>

</html>

<!-- le Portfolio contiendra une seule page avec plusieurs sections 
    premiere section: Acceuil juste un message de bienvenu de ma part contenant
        1 - mon pseudonyme dans le monde de la tech
        2 - mes domaines d'expertise notamment : le développement d'application, l'administration des systemes d'exploitation Linux, l'administration réseau
        3 - un boutton en savoir plus sur les compétences mentionnées (vers la section compétences)
        4 - une grande image de moi en train de croiser les bras pour acceuillir le visiteur

    deuxieme section: Profil contiendra
        1 - une partie de présentation
        2 - une bref introduction pour mon intéret dans le monde de l'IT
        3 - une partie de bref descriptif de mes status sociaux auparavants et actuels (incluant les post ainsi que le statut a 42) 

    troisieme section: Les compétences en dev
        1 - un container pour les fondements (langages)
        2 - un container pour les technologies experimentés (frameworks)
        3 - un container contenant une capture d'écran de mon CV de dev ainsi qu'un boutton pour le télécharger

    quatrieme section: Les compétences en admin sys
        1 - un container pour les fondements (le kernel, les processus)
        2 - un container pour les OS experimentés
        3 - un container contenant une capture d'écran de mon CV de admin sys ainsi qu'un boutton pour le télécharger

    cinquieme section: Le Portfolio des projets de dev
        1 - carousel contenant les screenshots des projets de dev effectués avec en texte de description les technologies utilisés ainsi que les langages
    
    sixieme section: La partie contact
        1 - un formulaire de contact comme dans ShexWeeknd | Portfolio.fr
    
    un footer contenant:
        1 - les mentions légales
        2 - politiques de confidentialité
        3 - autres liens: facebook, linkedin, instagram
        4 - des coordonnées tels que l'adresse email, l'adresse domicile, le pays résident, le numéro de téléphone
-->

<script>
    AOS.init({
        duration: 1500,
    });
</script>