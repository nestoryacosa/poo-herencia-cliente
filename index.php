<?php
    require_once "clases/cliente.php";
    require_once "clases/empresa.php";
    require_once "clases/particular.php";

    $emp1 = new Empresa("Raelir SC","24991076","Gral. Palleja","739",214999345321);
    echo $emp1->mostrardatos();
    echo "Número de RUT: ".$emp1->getRut()."<hr>";

    $emp2 = new Particular("Ramiro Casullo","099 109 332","Colonia","1219","4.132.775-9");
    echo $emp2->mostrardatos();
    echo "Número de Cédula: ".$emp2->getCedula()."<hr>";
    echo "<br><hr>".$emp1;


?>