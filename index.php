<?php
$stringa='Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat minima sunt, excepturi iusto provident aut eligendi blanditiis accusantium ab, ipsa reiciendis doloribus! Fugit delectus eius deserunt quidem quasi, quod nemo dicta aut corrupti maiores libero, cumque odio perspiciatis molestias obcaecati iusto. Numquam vel delectus expedita dignissimos beatae dolore animi est.'
$stringa_nuova=str-replace('dolor','doloribus','dolore','***',$stringa);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem</title>
</head>
<body>
    <p><?php echo $stringa ?></p>
    <p><?php echo strlen($stringa) ?></p>
    <h1>Nuova Stringa</h1>
    <p><?php echo $stringa_nuova ?></p>
    <p><?php echo strlen($stringa_nuova) ?></p>

</body>
</html>