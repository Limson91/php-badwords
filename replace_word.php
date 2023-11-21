<?php 

    $form_word = $_POST['replace-word'];
    $replace_word = $_POST['new-word'];
    $new_word = '<span class="red_censored">'.$_POST['new-word'].'</span>';

    $text = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Replace</title>
</head>
<body>
    <p><?php echo $text; ?></p>
    <p>Lunghezza testo originale: <?php echo strlen($text) ?> caratteri.</p>

    <?php
        $testo_censurato = str_ireplace($form_word, $replace_word, $text);
        $lunghezza_testo = strlen($testo_censurato);
        $testo_censurato = str_ireplace($form_word, $new_word, $text);
    ?>
    <p>TESTO CENSURATO: <?php echo $testo_censurato; ?></p>
    <p>Lunghezza testo censurato: <?php echo $lunghezza_testo ?> caratteri.</p>
</body>
</html>