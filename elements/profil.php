<link rel="stylesheet" href="assets/css/profil.css">

<style>
    .profil .presentation {
        display: inline-flex;
        flex-direction: column;
    }

    .profil .presentation>div {
        display: inline-flex;
        flex-direction: row;
        align-items: center;
    }

    .profil .presentation>div .key {
        text-decoration: underline;
        text-decoration-skip-ink: auto;
        font-size: 1.3rem;
        font-weight: 600;
        width: min-content;
        white-space: nowrap;
        margin-bottom: 0;
    }

    .profil .presentation>div .value {
        margin-bottom: 0;
    }

    .profil .separation {
        width: 50%;
        height: 1px;
        border-radius: 100%;
        position: relative;
        display: flex;
        border: 1px solid rgb(128 128 128 / 50%);
        margin: 1rem 0;
    }
</style>

<section class="profil" id="profil">
    <div class="wrap" data-aos="fade-in">
        <div class="overlay">
            <div class="overlay-content animate slide-left delay-2">
                <h1 class="animate slide-left pop delay-4">whoami</h1>
                <p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem; font-size: 3rem; font-weight: 600">ShexWeeknd<br /><span style="width: min-content; white-space: nowrap;display: flex;align-items: center;justify-content: center;">| hramaros</span></p>
            </div>
            <div class="image-content animate slide delay-5"></div>
        </div>
        <div class="text" data-aos="fade-right">
            <div class="presentation">
                <div>
                    <span class="key">NOM:</span>
                    <p class="value">&nbsp;H. Nantenaina RAMAROSANDRATANA</p>
                </div>
                <div>
                    <span class="key">AGE:</span>
                    <p class="value">&nbsp;<?php
                                            echo date('Y') - 2002;
                                            ?></p>
                </div>
                <div>
                    <span class="key">PAYS:</span>
                    <p class="value">&nbsp;Madagascar</p>
                </div>
            </div>

            <span class="separation" data-aos="fade-right"></span>

            <p>
                À un jeune âge, j'étais souvent parmi les meilleurs de ma classe. Cependant, c'est au début de mes études universitaires que j'ai véritablement pris conscience de ma soif de connaissance et de ma volonté de contrôle. Depuis lors, cette soif est devenue mon guide, aussi bien dans mes apprentissages de la vie que dans ce monde numérique en perpétuelle évolution.
            </p>

            <p><img class="inset" src="../../assets/img/esp-antsiranana.png" alt="" />Mon aventure officielle dans le monde de l'informatique débute à l'École Supérieure Polytechnique d'Antsiranana. Trois ans d'une vie, entre les cours brûlants d'Antsiranana et un systeme pédagogique en mode "freestyle" (merci aux enseignants pour leurs précieuses heures !). Le cursus a mis l'accent sur l'Électronique, l'Informatique et les Télécommunications, mais mes vraies leçons étaient celles de la vie universitaire. J'ai terminé mon parcours licence en 2023, avec quelques cicatrices mentales et physiques en prime.</p>

            <p><img class="inset" src="../../assets/img/42-tana.png" alt="" />Janvier 2024, de retour à Antananarivo, je suis littéralement métamorphosé. Ma décision d'intégrer le nouveau campus du réseau 42 à Antananarivo a été un véritable tournant dans ma vie. La PISCINE, intense mois d'apprentissage, a bouleversé mes habitudes de travail, mon moral et même ma manière d'interagir avec les autres (merci au P2P !). Après des semaines de souffrance, j'ai enfin été admis au sein du réseau 42 (PS : à tous mes amis qui ont rencontré des obstacles, ne perdez pas espoir, persévérez !). Aujourd'hui, je suis fier de faire parti de la secte 42.</p>

            <p>
                En quelques mots, je suis ShexWeeknd (alias hramaros42), mon vrai nom est déjà mentionné en haut de cette présentation ! Passionné d'informatique jusqu'au bout des ongles, je respire, je vis et je crée avec l'informatique. A 42, nous sommes des sorciers (oui, nous avons même des capes Harry Potter). Si vous souhaitez découvrir mes compétences techniques, c'est par <a href="#compdev">ici</a> que ça se passe.
            </p>
        </div>
    </div>
</section>