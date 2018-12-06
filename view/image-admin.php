<?php
if (isset($_SESSION['message'])) {
 $message = $_SESSION['message'];
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Image Management</title>
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
                    <h1>Image Management</h1>
                </div>

                <h2>Add New Product Image</h2>
                <?php
                    if (isset($message)) {
                    echo $message;
                } ?>

                <form action="/acme/uploads/" method="post" enctype="multipart/form-data">
                    <label for="invItem">Product</label><br>
                    <?php echo $prodSelect; ?><br><br>
                    <label>Upload Image:</label><br>
                    <input type="file" name="file1"><br>
                    <input type="submit" class="regbtn" value="Upload">
                    <input type="hidden" name="action" value="upload">
                </form>

                <h2>Existing Images</h2>
                <p class="notice">If deleting an image, delete the thumbnail too and vice versa.</p>
                <?php
                    if (isset($imageDisplay)) {
                    echo $imageDisplay;
                } ?>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>
        </div>
    </body>

</html>
<?php unset($_SESSION['message']); ?>
