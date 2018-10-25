<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
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

                <form method="post" action="/acme/products/index.php">

                    <label>Category Name</label> <br />
                    <input type="text" name="catName" id="catName"><br />

                    <input type="submit" name="submit" id="regbtn" value="Category">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="category">
                </form>

            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>

    </body>

</html>
