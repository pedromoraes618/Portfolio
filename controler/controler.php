<?php 
if($_GET){
    if(isset($_GET['m4'])){
        
        include "view/desc_projetos/m4.php";
    }elseif(isset($_GET['m3'])){
        include "view/desc_projetos/m3.php";
    }elseif(isset($_GET['m2'])){
        include "view/desc_projetos/m2.php";
    }
    elseif(isset($_GET['m1'])){
        include "view/desc_projetos/m1.php";
    }
}

?>