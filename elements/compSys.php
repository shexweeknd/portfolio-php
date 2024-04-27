<style>
    .compsys {
        display: inline-flex;
        padding: 0;
    }

    .compsys .cv {
        width: 40%;
        height: 100%;
        background-image: url('assets/img/compsys.jpg');
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

    .compsys .cv .cv-image {
        display: flex;
        width: 100%;
        border-radius: 15px;
    }

    .compsys .cv .cv-image>img {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        transition: filter 1s ease-in-out;
    }

    .compsys .cv .cv-image .consult {
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

    .compsys .cv .button-container {
        width: 100%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    .compsys .cv .button-container .btn {
        max-width: min-content;
    }

    /* competences */
    .compsys .competences {
        width: -webkit-fill-available;
        height: 100%;
        display: inline-flex;
        flex-direction: column;
        padding: 5rem 0;
        gap: 2rem;
    }

    .compsys .competences .title {
        display: inline-flex;
        justify-content: center;
        text-align: center;
        font-family: "Dank Mono", ui-monospace, monospace;
        font-size: 1.6rem;
        font-weight: 800;
    }

    .compsys .competences .intro {
        display: inline-flex;
        margin: 0 5rem;
        text-align: center;
        font-family: "Dank Mono", ui-monospace, monospace;
        font-size: 1rem;
    }

    .compsys .competences .competences-content {
        display: inline-flex;
        flex-direction: center;
        margin: 0 5rem;
        height: -webkit-fill-available;
    }

    .compsys .competences .competences-content .modules,
    .compsys .os {
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
            background-color: red;
            color: white;
            white-space: nowrap;
        }
    }

    .compsys .competences .competences-content .separation-vertical {
        height: 100%;
        width: 1px;
        border-radius: 100%;
        position: relative;
        display: flex;
        border: 1px solid rgb(128 128 128 / 50%);
        margin: 0 1rem;
    }

    .compsys .competences .competences-content .modules {}

    .compsys .competences .competences-content .os {}
</style>

<section id="compsys" class="compsys">
    <div class="cv skeleton">
        <div class="cv-image skeleton" data-aos="fade-up">
            <img src="assets/svg/CV-dev.svg" alt="">
            <div class="consult">
                <button id="admin-cv-button" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cv-modal">VOIR</button>
            </div>
        </div>
        <div class="button-container" data-aos="fade-up">
            <a href="assets/pdf/CV-dev.pdf" rel="noopener noreferrer">
                <button type="button" class="btn btn-danger">DOWNLOAD</button>
            </a>
        </div>
    </div>
    <div class="competences">
        <div class="title">COMPÉTENCES EN ADMINISTRATION SYSTEME</div>
        <div class="intro">OULA ! Pourquoi tout est rouge ? et bien en dessous a droite dans la partie ou je mentionne les OS, Vous trouverez Rocky Linux (c'est un clone de RedHat). Je suis un grand fan de RedHat car il permet un controle total sur Linux (et le controle j'aimes ca !). Dans la partie de gauche je fais mention de mes modules d'apprentissage préférés.</div>
        <div class="competences-content">
            <div class="modules">
                <ul class="text-white">
                    <li>Kernel [2024 - Actuel]</li>
                    <li>Linux Process [2024 - Actuel]</li>
                    <li>Systemd [2024 - Actuel]</li>
                    <li>Containers [2023 - Actuel]</li>
                </ul>
            </div>
            <!-- <div class="separation-vertical" data-aos="zoom-in"></div> -->
            <div class="os">
                <ul class="text-white">
                    <li>Rocky Linux [2024 - Actuel]</li>
                    <li>Kali Linux [2023 - Actuel]</li>
                    <li>Parrot OS [2021 - 2023]</li>
                    <li>Ubuntu [2020 - 2021]</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    function appearConsult() {
        //appliquer du blur blanc au img de tous les cv-image
        cvImages = document.getElementsByClassName('cv-image');
        for (let i = 0; i < cvImages.length; i++) {
            cvImage = cvImages[i];
            img = cvImage.querySelector('img');
            img.style.filter = "blur(1px)";
        }

        consults = document.getElementsByClassName('consult');
        for (let i = 0; i < consults.length; i++) {
            consult = consults[i];
            consult.style.opacity = 1;
            consult.style.height = '100%';
        }
    }

    function disappearConsult() {
        //appliquer du blur blanc au img de tous les cv-image
        cvImages = document.getElementsByClassName('cv-image');
        for (let i = 0; i < cvImages.length; i++) {
            cvImage = cvImages[i];
            img = cvImage.querySelector('img');
            img.style.filter = "unset";
        }

        consults = document.getElementsByClassName('consult');
        for (let i = 0; i < consults.length; i++) {
            consult = consults[i];
            consult.style.opacity = 0;
            consult.style.height = 0;
        }
    }

    var cvImages = document.getElementsByClassName('cv-image');

    for (let i = 0; i < cvImages.length; i++) {
        cvImage = cvImages[i];

        cvImage.addEventListener('mouseenter', () => {
            appearConsult();
        });

        cvImage.addEventListener('mouseleave', () => {
            disappearConsult();
        });
    }
</script>

<script>
    var cvDevLink = "https://drive.google.com/file/d/1hSQ3WbGO8nbO1Dre-bBZyAxjn2LvwBiS/preview";
    var cvAdminLink = "https://drive.google.com/file/d/186kFuq_OKMewb-O3czc5o5yW1RUjRsAt/preview";

    function changerSrcIframe(nouveauSrc) {
        var iframe = document.getElementById('modal-body').querySelector('iframe');
        iframe.src = nouveauSrc;
    }

    document.getElementById('dev-cv-button').addEventListener('click', function() {
        changerSrcIframe(cvDevLink);
    });

    document.getElementById('admin-cv-button').addEventListener('click', function() {
        changerSrcIframe(cvAdminLink);
    });
</script>