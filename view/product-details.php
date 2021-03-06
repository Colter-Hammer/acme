<!DOCTYPE html>
<html>

    <head>
        <title>Acme</title>
        <link rel="stylesheet" type="text/css" href="/acme/css/main.css">
    </head>

    <body>
        <div id="full-body-wrapper">
            <header id="page-header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
            </header>

            <nav id="navigation">
                <?php echo $navList; ?>
            </nav>

            <main>
                <div id="product-container">
                    <?php echo $prod?>
                </div>
                <div id="prod_imgs">
                    <?php echo $imagesDisplay;?>
                </div>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>
        </div>
    </body>

</html>
