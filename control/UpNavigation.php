<?php
class UpNavigation{

    public function UploadNavigation(){
        include "model/navigation.php";
    }

    public function AboutMe(){
        include "model/AboutMe.php";
    }

    public function skills(){
        include "model/skills.php";
    }
    
    public function contact(){
        include "view/page/contact.php";
    }
}
?>