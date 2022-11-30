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
            $contact = new Manager_contact(cleanInput($_POST['mail_contact']), cleanInput($_POST['objet_contact']),
            cleanInput($_POST['contenu_contact']), cleanInput($_POST['date_contact']));
            //ajouter le contenu de nom et prenom
            $contact->setNomContact(cleanInput($_POST['nom_contact']));
            $contact->setPrenomContact(cleanInput($_POST['prenom_contact']));
            //ajouter en bdd le contenu du formulaire
            $contact->addContact($bdd);
            //message enregistrement
            echo '<p>Le message à été enregistré</p>';
            $content = utf8_decode("<p>envoyé par : " .cleanInput($_POST['mail_contact'])."</p>
            <p> contenu du mail : ".$_POST['contenu_contact']."</p>");
            email($login, $mdp, cleanInput($_POST['objet_contact']), $content, cleanInput($_POST['mail_contact']));
        }
        else{
            echo '<p>Veuillez remplir les champs du formulaire</p>';
        }
    }
?>