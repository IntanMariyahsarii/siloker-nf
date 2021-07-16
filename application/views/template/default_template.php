<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php echo $page["head"]; ?>
</head>

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <?php echo $page["header"]; ?>
</header>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <?php echo $content; ?>

<footer>
    <?php echo $page["footer"]; ?>
</footer>

</body>

<?php echo $page['main_js'];?>

</html>
