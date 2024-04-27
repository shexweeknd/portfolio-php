<style>
    .contact {
        display: inline-flex;
        width: 100%;
        height: -webkit-fill-available;
        justify-content: center;
        padding: 0 3rem;
    }

    .contact .contact-text {
        width: 50%;
    }

    .contact .contact-illustration {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 3rem 0;
    }

    .contact .contact-illustration img {
        width: 70%;
        height: -webkit-fill-available;
        animation: float 2s ease-in-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    @media screen and (max-width: 980px) {

        .contact {
            display: inline-flex;
            flex-direction: column;
        }

        .contact .contact-text {
            width: 100%;
        }

        .contact .contact-text h2 {
            width: 100%;
            text-align: center;
        }

        .contact .contact-text p,
        .contact .contact-text a {
            display: none;
        }

        .contact-illustration img {
            display: none;
        }
    }
</style>

<section id="contact" class="contact" style="width: 100%" data-aos="fade-down">
    <div class="contact-text">
        <h2>Contactez-moi !</h2>
        <p style="max-width: 70%">Vous pouvez également me contacter par mail pour une éventuelle collaboration.</p>
        <div class="contact-illustration pr-5">
            <img src="assets/img/contact-illustration.png" />
        </div>
    </div>
    <?php
    include_once "elements/contactForm.php"
    ?>
</section>