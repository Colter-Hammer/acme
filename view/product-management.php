<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('Location: /acme/accounts');
    exit;
}

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}

?>
<!DOCTYPE html>
<html>

    <head>
        <title>Product Management</title>
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
                <div id="home-container">
                    <form>
                        <input class="submit big_btn" type="button" onclick="location.href='../products/index.php?action=addcat'"
                            value="Add a Category">

                        <br />
                        <input class="submit big_btn" type="button" onclick="location.href='../products/index.php?action=addprod'"
                            value="Add a Product">
                    </form>
                    <?php
if (isset($message)) {
    echo $message;
} else if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
}

if (isset($prodList)) {
    echo $prodList;
}
?>

                </div>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
<?php unset($_SESSION['message']);?>
