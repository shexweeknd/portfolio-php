<style>
    .compdev {
        display: inline-flex;
        padding: 0;
    }

    .compdev .cv {
        width: 40%;
        height: 100%;
        background-image: url('assets/img/compdev.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        padding: 5rem;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5rem;
    }

    .compdev .cv .cv-image {
        display: flex;
        width: 100%;
        border-radius: 15px;
    }

    .compdev .cv .cv-image>img {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        transition: filter 1s ease-in-out;
    }

    .compdev .cv .cv-image .consult {
        position: absolute;
        width: -webkit-fill-available;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: 0;
        height: 0;
        opacity: 0;
        transition: opacity .5s ease-in-out, height 1s ease-in-out;
    }

    .compdev .cv .button-container {
        width: 100%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    .compdev .cv .button-container .btn {
        max-width: min-content;
    }

    /* competences */
    .compdev .competences {
        width: -webkit-fill-available;
        height: 100%;
        display: inline-flex;
        flex-direction: column;
        padding: 5rem 0;
        gap: 2rem;
    }

    .compdev .competences .title {
        display: inline-flex;
        justify-content: center;
        text-align: center;
        font-family: "Dank Mono", ui-monospace, monospace;
        font-size: 1.6rem;
        font-weight: 800;
    }

    .compdev .competences .intro {
        display: inline-flex;
        margin: 0 5rem;
        text-align: center;
        font-family: "Dank Mono", ui-monospace, monospace;
        font-size: 1rem;
    }

    .compdev .competences .competences-content {
        display: inline-flex;
        flex-direction: center;
        margin: 0 5rem;
        height: -webkit-fill-available;
    }

    .compdev .competences .competences-content .languages,
    .framework {
        width: 50%;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        text-align: left;
        padding: 0 1rem;

        ul {
            width: 100%;
            height: 100%;
            display: inline-flex;
            flex-direction: column;
            gap: 1em;
        }

        ul>li {
            font-size: 1em;
            background-color: blue;
            color: white;
            white-space: nowrap;
        }
    }

    .compdev .competences .competences-content .separation-vertical {
        height: 100%;
        width: 1px;
        border-radius: 100%;
        position: relative;
        display: flex;
        border: 1px solid rgb(128 128 128 / 50%);
        margin: 0 1rem;
    }

    .compdev .competences .competences-content .languages {}

    .compdev .competences .competences-content .framework {}
</style>

<section id="compdev" class="compdev">
    <div class="competences">
        <div class="title">COMPÉTENCES EN DEVELOPPEMENT</div>
        <div class="intro">Je ne vais pas mesurer mes compétences par poucentage, mais plutot par année d'expérience (en mentionnant les dates ou j'ai pratiqué bien sur), ceux mentionnés á gauches sont les langages de programmation, ceux de droites montrent les framework. Bon appetit !</div>
        <div class="competences-content">
            <div class="languages">
                <ul class="text-white">
                    <li>PHP [2024 - Actuel]</li>
                    <li>C & Bash [2024 - Actuel]</li>
                    <li>XML [2022 - 2023]</li>
                    <li>JavaScript [2022 - Actuel]</li>
                    <li>MySQL [2022 - Actuel]</li>
                    <li>Python [2022 - 2023]</li>
                    <li>HTML + CSS [2016 - Actuel]</li>
                </ul>
                <!-- <ul>
                    <li>PHP [2024 - Actuel]<br />Actuellement je travaille sur des projets PHP en dur avec HTML+CSS ce site portfolio en fait partie.</li>
                    <li>C [2024 - Actuel]<br/>ET oui le bon vieux C fait partie de mon quotidien figurez-vous !? Je pratique le C depuis mon entrée a l'école 42.</li>
                    <li>XML [2022 - 2023]<br/>Boff Boff, une compétence que j'ai inconsciemment acquis lors de mon projet de licence.</li>
                    <li>JavaScript [2022 - Actuel]<br/>J'ai eu l'occasion de pratiquer le JavaScript aux cotés de mes ainés de l'ESP durant le temps.</li>
                    <li>MySQL [2022 - Actuel]<br/>Tout a commencé lors d'un projet de deuxieme année, haaa la vieille époque.</li>
                    <li>Python [2022 - 2023]<br/>J'ai commencé la programmation avec Python, comme tout morveux qui se respectent. Durant le temps je m'initiais au CNN, j'ai du arreter car je devais me préparer a suivre un roadmap bien fondé.</li>
                    <li>HTML + CSS [2016 - Actuel]<br/>Pourquoi 2016 ? t'étais pas encore au college ? Bah oui facebook etait encore piratable avec HTML et CSS !</li>
                </ul> -->
            </div>
            <!-- <div class="separation-vertical" data-aos="zoom-in"></div> -->
            <div class="framework">
                <ul class="text-white">
                    <li>JQuery [2024 - Actuel]</li>
                    <li>SocketIO [2022 - 2023]</li>
                    <li>ExpressJs [2022 - 2023]</li>
                    <li>ReactJs [2022 - 2023]</li>
                    <li>NodeJs [2022 - 2023]</li>
                    <li>PyQt5 [2022 - 2023]</li>
                    <li>SQLite [2021 - 2023]</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cv skeleton">
        <div class="cv-image skeleton" data-aos="fade-up">
            <img src="assets/svg/CV-dev.svg" alt="">
            <div class="consult">
                <button id="dev-cv-button" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cv-modal">VOIR</button>
            </div>
        </div>
        <div class="button-container" data-aos="fade-up">
            <a href="assets/pdf/CV-dev.pdf" rel="noopener noreferrer">
                <button type="button" class="btn btn-primary">DOWNLOAD</button>
            </a>
        </div>
    </div>
</section>