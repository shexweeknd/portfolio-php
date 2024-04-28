<style>
    .form-container {
        display: inline-flex;
        flex-direction: column;
    }

    .form-container p {
        margin-bottom: 0;
        margin-top: 1rem;
    }

    .form-container .name {
        display: inline-flex;
        flex-direction: column;
    }

    .form-container .button-container {
        margin-top: 1rem;
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .form-container .name input {
        height: fit-content;
    }

    .form-container .message textarea {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    @media screen and (max-width: 980px) {
        .form-container .button-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center
        }
    }
</style>

<div class="form-container">
    <div class="name">
        <p>Qui êtes-vous ?</p>
        <div style="width: 100%; display: inline-flex">
            <input class="form-control" type="text" style="text-align: left" name="nom" placeholder="Votre nom">
            <input class="form-control" type="text" style="text-align: left" name="prenom" placeholder="Votre prénom">
        </div>
    </div>
    <div class="email">
        <p>Quel est votre email ?</p>
        <input class="form-control" type="text" style="text-align: left; width: -webkit-fill-available" name="email" placeholder="Ex: exemple@email.com">
    </div>
    <div class="phone">
        <p>Votre numero de téléphone: </p>
        <input class="form-control" type="text" style="text-align: left; width: -webkit-fill-available" name="phoneNumber" placeholder="Ex: 01 88 40 17 00">
    </div>
    <div class="message">
        <p>Votre message: </p>
        <textarea rows="5" style="text-align: left; width: -webkit-fill-available" name="message" placeholder="Veuillez entrer votre message"></textarea>
    </div>
    <div class="button-container">
        <button class="btn btn-primary" onclick=(contactSupport())>
            Envoyer
        </button>
    </div>
</div>

<script>

    function validateNom(nom) {
        if (nom == "")
            return false;
        // Vérifier si le nom a au moins 3 caractères et ne dépasse pas 32 caractères
        if (nom.length < 3 || nom.length > 32) {
            return false;
        }

        // Expression régulière pour vérifier si le nom ne contient que des lettres alphabétiques
        var regex = /^[a-zA-Z]+$/;

        // Vérifier si le nom ne contient que des lettres alphabétiques
        if (!regex.test(nom)) {
            return false;
        }

        // Si toutes les conditions sont remplies, le nom est valide
        return true;
    }

    function validateEmail(email) {
        // Expression régulière pour valider une adresse email
        var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Vérifier si l'adresse email correspond à la regex
        if (regex.test(email)) {
            return true; // L'email est valide
        } else {
            return false; // L'email est invalide
        }
    }

    function validatePhoneNumber(phoneNumber) {
        // Expression régulière pour vérifier le format d'un numéro de téléphone français
        var regex = /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/;

        // Vérifier si le numéro de téléphone correspond au format attendu
        return regex.test(phoneNumber);
    }

    function validate(nom, prenom, email, phoneNumber, message) {
        //TODO valider les variables
        validation = "";

        //validation du nom et du prenom
        if (message == "")
            validation = "Le message ne doit pas etre vide.";
        if (!validatePhoneNumber(phoneNumber))
            validation = "Le numéro de téléphone n'est pas en france.";
        if (!validateEmail(email))
            validation = "L'email fourni est invalide.";
        if (!validateNom(prenom))
            validation = "Le prenom fourni est invalide.";
        if (!validateNom(nom))
            validation = "Le nom fourni est invalide.";
        // return "error message" si invalide
        return validation;
    }

    function resetContactForm() {
        //vider le formulaire de contact
        document.getElementsByName("nom").value = "";
        document.getElementsByName("prenom").value = "";
        document.getElementsByName("email").value = "";
        document.getElementsByName("phoneNumber").value = "";
        document.getElementsByName("message").value = "";
    }

    function contactSupport() {
        var nom = document.getElementsByName("nom")[0].value;
        var prenom = document.getElementsByName("prenom")[0].value;
        var email = document.getElementsByName("email")[0].value;
        var phoneNumber = document.getElementsByName("phoneNumber")[0].value;
        var message = document.getElementsByName("message")[0].value;

        if (validate(nom, prenom, email, phoneNumber, message) != "") {
            displayErrorMessage(validate(nom, prenom, email, phoneNumber, message));
            return;
        }
        $.ajax({
            type: "POST",
            url: "https://smailia.fr/utils/userUtils.php", // L'URL de votre script PHP
            data: {
                nom: nom,
                prenom: prenom,
                email: email,
                phoneNumber: phoneNumber,
                message: message,
                op: 'contactSupport'
            },
            success: function(response) {
                // Traitement de la réponse du script PHP
                console.log("nous avons une reponse !");
                console.log(response);
                var eventData = JSON.parse(response);

                //verification si il n'y a pas d'erreur
                if (eventData['error']) {
                    displayErrorMessage(eventData['error']);
                    resetContactForm();
                    return;
                }

                //succes total pour l'envoi des mails
                displaySuccessMessage("Message envoyé");
                resetContactForm();
            },
            error: function(xhr, status, error) {
                // Gestion des erreurs
                console.error(xhr.responseText);
            }
        });
    }

    // var sendButton = document.querySelector(".button-container").querySelector(".button-5");
    // sendButton.onClick = contactSupport();
</script>