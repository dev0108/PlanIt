<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php /* NEW */ ?>
    <?php echo $resetcss ?>
    <?php echo $css; ?>
</head>

<body>
    <main>
        <?php
    if (!empty($_SESSION['error'])) {
      echo '<div class="error box">' . $_SESSION['error'] . '</div>';
    }
    if (!empty($_SESSION['info'])) {
      echo '<div class="info box">' . $_SESSION['info'] . '</div>';
    }
    ?>
        <header>
            <div class="header__wrapper--one">
                <h1> <?php echo $title; ?></h1>
                <p class="title__subtitle">
                    <?php echo $subtitle; ?>
                </p>
            </div>
            <div class="header__wrapper--two">
                <a href="index.php?page=search" class="search__link">Zoek een evenement...</a>
            </div>
        </header>
        <?php echo $content; ?> </main>
    <?php echo $js; ?>
    <footer>
        <a href="index.php?page=add">+</a>
    </footer>
</body>

</html>