<?php
    class Manager_contact extends Contact{
        //Méthodes
        public function addContact($bdd){
            //récupérer le contenu des champs du formulaire (objet Contact)
            $nom = $this->getNomContact();
            $prenom = $this->getPrenomContact();
            $mail = $this->getMailContact();
            $objet = $this->getObjetContact();
            $contenu = $this->getContenuContact();
            $date = $this->getDateContact();
            try{
                $req = $bdd->prepare('INSERT INTO contact(nom_contact,
                prenom_contact, mail_contact, objet_contact, contenu_contact, date_contact)
                values(?,?,?,?,?,?)');
                $req->bindParam(1, $nom, PDO::PARAM_STR);
                $req->bindParam(2, $prenom, PDO::PARAM_STR);
                $req->bindParam(3, $mail, PDO::PARAM_STR);
                $req->bindParam(4, $objet, PDO::PARAM_STR);
                $req->bindParam(5, $contenu, PDO::PARAM_STR);
                $req->bindParam(6, $date, PDO::PARAM_STR);
                $req->execute();
            }
            catch (Exception $e) 
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : ne peut pas enregistrer');
            }
        }
    }
?>