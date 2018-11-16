<?php

if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('Location: /acme/accounts');
    exit;
}

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <title>
                <?php if (isset($prodInfo['invName'])) {echo "Delete $prodInfo[invName]";}?>
                | Acme, Inc
            </title>
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
                <h1>
                    <?php if (isset($prodInfo['invName'])) {echo "Delete $prodInfo[invName]";}?>
                </h1>
                <form method="post" action="/acme/products/index.php">

                    <label for="invName">Product Name</label>
                    <input type="text" readonly name="invName" id="invName" <?php if (isset($prodInfo['invName']))
                        {echo "value='$prodInfo[invName]'" ;}?>><br />

                    <label for="invDescription">Product Description</label>
                    <textarea name="invDescription" readonly id="invDescription"><?php if (isset($prodInfo['invDescription'])) {echo $prodInfo['invDescription'];}?></textarea>
                    <br />

                    <input type="submit" name="submit" id="prodbtn" value="Delete Product">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="deleteProd">
                    <!-- Store the primary key value for the updated prod -->
                    <input type="hidden" name="invId" value="<?php if (isset($prodInfo['invId'])) {echo $prodInfo['invId'];}?>">
                </form>

            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
