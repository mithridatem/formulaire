<?php
    function cleanInput($value){
        return htmlspecialchars(strip_tags(trim($value)));
    }
?>