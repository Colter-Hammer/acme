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

                    <label>Product Name</label>
                    <input type="text" name="invName" id="invName"><br />
                    <label>Product Description</label>
                    <input type="text" name="invDescription" id="invDescription"><br />
                    <label>Product Picture</label>
                    <input type="text" name="invImage" id="invImage" value="/acme/images/no-image.png"><br />
                    <label>Product Thumbnail</label>
                    <input type="text" name="invThumbnail" id="invThumbnail" value="/acme/images/no-image.png"><br />
                    <label>Product Price</label>
                    <input type="text" name="invPrice" id="invPrice"><br />
                    <label>How many are in stock?</label>
                    <input type="text" name="invStock" id="invStock"><br />
                    <label>Product Size</label>
                    <input type="text" name="invSize" id="invSize"><br />
                    <label>Product Weight</label>
                    <input type="text" name="invWeight" id="invWeight"><br />
                    <label>Product Location</label>
                    <input type="text" name="invLocation" id="invLocation"><br />
                    <label>Category</label>
                    <?php echo $catList ?><br />
                    <label>Product Vendor</label>
                    <input type="text" name="invVendor" id="invVendor"><br />
                    <label>Product Style</label>
                    <input type="text" name="invStyle" id="invStyle"><br />


                    <input type="submit" name="submit" id="prodbtn" value="Submit">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="product">
                </form>

            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
