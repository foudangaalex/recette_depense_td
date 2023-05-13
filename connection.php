
<?php
try {
    $pdo = new PDO('mysql:host=sql201.epizy.com;dbname='epiz_34192786_auth_db', "epiz_34192786", "********** ");
   
} catch (PDOException $e) {
    $sms="Erreur !: " . $e->getMessage();
    die($sms);
}

?> 