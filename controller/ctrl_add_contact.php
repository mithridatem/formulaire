<?php
    //import des ressources
    include './model/model_contact.php';
    include './manager/manager_contact.php';
    include './smtp.php';
    include './manager/manager_mail.php';
    include './view/view_add_contact.php';
    //logique
    if(isset($_POST['submit'])){
        //tester si les champs sont remplis
        if(!empty($_POST['mail_contact']) AND !empty($_POST['objet_contact'])
        AND !empty($_POST['contenu_contact']) AND !empty($_POST['date_contact'])){
            //instancier un objet Contact
            $contact = new Manager_contact($_POST['mail_contact'], $_POST['objet_contact'],
            $_POST['contenu_contact'], $_POST['date_contact']);
            //ajouter le contenu de nom et prenom
            $contact->setNomContact($_POST['nom_contact']);
            $contact->setPrenomContact($_POST['prenom_contact']);
            //ajouter en bdd le contenu du formulaire
            $contact->addContact($bdd);
            //message enregistrement
            echo '<p>Le message à été enregistré</p>';
            $content = utf8_decode("<p>envoyé par :" .$_POST['mail_contact']."</p>
            <p> contenu du mail : ".$_POST['contenu_contact']."</p>");
            email($login, $mdp, $_POST['objet_contact'], $content, $_POST['mail_contact']);
        }
    }
?>