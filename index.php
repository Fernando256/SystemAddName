<form method="POST">
    <input type="text" name="name">
    <button>Salvar</button>
</form>
<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$text = file_get_contents('text.txt');
$text .= "$name.";
file_put_contents('text.txt', $text);



$var = explode(".", $text);
echo "<h1>Lista de nomes</h1>"
?>
    <ul>
<?php
foreach ($var as $value) {
    if (!($value == null)){    
    ?>
    <li><?=$value?></li>
    <?php
    }
}
    ?>
    </ul>
