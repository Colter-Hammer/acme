<!DOCTYPE html>
<html>

    <head>
        <title>
            <?php echo $categoryName; ?> Products | Acme, Inc.</title>
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
                <div id="home-container">
                    <h1>
                        <?php echo $categoryName; ?> Products</h1>
                    <?php if(isset($prodDisplay)){ 
                        echo $prodDisplay; 
                    } ?>
                </div>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>
        </div>
    </body>

</html>
