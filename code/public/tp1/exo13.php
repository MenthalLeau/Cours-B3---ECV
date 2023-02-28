<?php

function verificationPassword($PassWord) {
    $valid = 'false';
    
    if (strlen($PassWord) >= 8){
        $valid = 'true';
    }
    return $valid;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 13</title>
</head>
<body>
    <h1>Exo 13</h1>

    <p><?= verificationPassword('password'); ?></p>
    <p><?= verificationPassword('12345890'); ?></p>
    <p><?= verificationPassword('azerty'); ?></p>
</body>
</html>