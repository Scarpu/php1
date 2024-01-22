<?php
require ("Alunno.php");
 $Alunno1 = new Alunno("mario", "marco", 18);
 $Alunno2 = new Alunno("mortino", "larco", 8);
 $Alunno3 = new Alunno("cavolo", "morto", 14);
 $Alunno4 = new Alunno("rosso", "nero", 12);
 $alunni= array($Alunno1, $Alunno2, $Alunno3, $Alunno4);

 foreach($alunni as $Alunno){
    echo $Alunno . "<br>";
 }