<?php
    class Contact{
        //Attributs
        private $id_contact;
        private $prenom_contact;
        private $nom_contact;
        private $mail_contact;
        private $objet_contact;
        private $contenu_contact;
        private $date_contact;
        //constructeur
        public function __construct($mail, $objet, $contenu, $date){
            $this->mail_contact = $mail;
            $this->objet_contact = $objet;
            $this->contenu_contact = $contenu;
            $this->date_contact = $date;
        }
        //Getters and Setters
        public function getIdContact():int{
            return $this->id_contact;
        }
        public function setIdContact($id){
            $this->id_contact = $id;
        }
        public function getPrenomContact():string{
            return $this->prenom_contact;
        }
        public function setPrenomContact($prenom){
            $this->prenom_contact = $prenom;
        }
        public function getNomContact():string{
            return $this->nom_contact;
        }
        public function setNomContact($nom){
            $this->nom_contact = $nom;
        }
        public function getMailContact():string{
            return $this->mail_contact;
        }
        public function setMailContact($mail){
            $this->mail_contact = $mail;
        }
        public function getObjetContact():string{
            return $this->objet_contact;
        }
        public function setObjetContact($objet){
            $this->objet_contact = $objet;
        }
        public function getContenuContact():string{
            return $this->contenu_contact;
        }
        public function setContenuContact($contenu){
            $this->contenu_contact = $contenu;
        }
        public function getDateContact():string{
            return $this->date_contact;
        }
        public function setDateContact($date){
            $this->date_contact = $date;
        }
    }

?>