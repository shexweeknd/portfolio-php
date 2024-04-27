<style>
    section {
        padding: 0 10rem;
    }

    .acceuil {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        width: 100%;
        padding: 0;
    }

    .acceuil .gauche {
        position: absolute;
        z-index: 1;
        max-width: 40vw;
        top: 50%;
        transform: translate(-100%, -50%);
    }

    .acceuil .image-container {
        max-width: 60%;
        max-height: 100%;
        right: 11%;
        position: absolute;
        overflow: hidden;
        /* z-index: -99; */
    }

    .acceuil .image-container img {
        position: relative;
        height: 100%;
        width: 100%;
    }

    :root {
        --gold: #ffb338;
        --light-shadow: #77571d;
        --dark-shadow: #3e2904;
    }

    .acceuil .wrapper {
        display: grid;
        grid-template-areas: "overlap";
        text-transform: uppercase;
    }

    .acceuil .wrapper>div {
        background-clip: text;
        -webkit-background-clip: text;
        color: #363833;
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-size: clamp(2rem, 2vw, 3rem);
        grid-area: overlap;
        letter-spacing: 2px;
        -webkit-text-stroke: 4px transparent;
    }

    .acceuil .gauche .wrapper div.bg {
        background-image: repeating-linear-gradient(100deg,
                var(--gold) 0%,
                var(--dark-shadow) 5%,
                var(--gold) 12%);
        color: transparent;
        transform: scaleY(1.05);
        transform-origin: top;
    }

    .acceuil .gauche .wrapper div.fg {
        background-image: repeating-linear-gradient(5deg,
                var(--gold) 0%,
                var(--light-shadow) 23%,
                var(--gold) 31%);
        color: #1e2127;
        transform: scale(1);
    }

    .acceuil .expertises {
        font-family: "Dank Mono", ui-monospace, monospace;
        font-size: 1.6rem;
        background-color: blue;
        color: #ffff;
    }

    .acceuil .expertises>a {
        color: #ffff;
    }
</style>

<section class="acceuil" id="particles-js">
    <div class="gauche">
        <div class="wrapper" data-aos="fade-down">
            <div class="bg"> ShexWeeknd </div>
            <div class="fg"> Shex </div>
        </div>
        <div class="paragraph-light" data-aos="fade-up">Bienvenue dans le site de ShexWeeknd
            < aka hramaros />. Un informaticien polyvalent | Éternel étudiant de la Tech de l'École 42 Antananarivo.
        </div>
        <div class="expertises" data-aos="flip-up">
            <p class="typewrite" data-period="1000" data-type='["< Développement des applications Web />", "< Administration des Systèmes Linux />"]'>
                <span class="wrap"></span>
            </p>
        </div>
        <span class="styled-link"><a href="#compdev">En savoir plus</a></span>
    </div>
    <div class="image-container">
        <img src="assets/img/img1.png" alt="image de bienvenu" srcset="">
    </div>
</section>

<script src="assets/js/type.js"></script>