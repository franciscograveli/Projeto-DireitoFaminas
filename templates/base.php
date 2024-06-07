<?php
function startblock($name) {
    global $blocks;
    $blocks[$name] = '';
    ob_start();
}

function endblock() {
    global $blocks;
    $last = array_key_last($blocks);
    $blocks[$last] = ob_get_clean();
}

function include_block($name) {
    global $blocks;
    if (isset($blocks[$name])) echo $blocks[$name];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php include_block('title'); ?></title>
</head>
<body>
    <?php include_block('content'); ?>
</body>
</html>
