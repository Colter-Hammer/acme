<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Add a Category</title>
        <link rel="stylesheet" type="text/css" href="/acme/css/improved.css" media="screen" />
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

                    <label>Category Name</label>
                    <input type="text" name="catName" id="catName"><br />

                    <input class="submit" type="submit" name="submit" id="catbtn" value="Submit">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="category">
                </form>

            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
