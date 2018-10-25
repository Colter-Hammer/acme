<!DOCTYPE html>
<html>

    <head>
        <title>Acme</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>

    <body>
        <div id="full-body-wrapper">
            <header id="page-header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php';?>
            </header>

            <nav id="navigation">
                <?php echo $navList; ?>
            </nav>

            <main>
                <div id="home-container">

                    <button id="category" type="submit" formaction="category">Add a category</button>
                    <button id="product" type="submit" name="action" value="product">Add a
                        product</button>

                </div>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
