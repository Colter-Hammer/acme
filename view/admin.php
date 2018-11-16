<?php
if (!$_SESSION['loggedin']) {
    header('Location: /acme/index.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Admin View</title>
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
                    <h1>Admin View</h1>
                </div>
                <?php
if (isset($message)) {
    echo $message;
}
?>
                <h1>
                    <?php echo $clientData['clientFirstname'] ?> Log in Successful
                </h1>
                <ul id="user_data">
                    <li>ID number:
                        <?php echo $clientData['clientId'] ?>
                    </li>
                    <li>First name:
                        <?php echo $clientData['clientFirstname'] ?>
                    </li>
                    <li>Last name:
                        <?php echo $clientData['clientLastname'] ?>
                    </li>
                    <li>Email address:
                        <?php echo $clientData['clientEmail'] ?>
                    </li>
                </ul>

                <?php
if ($clientData['clientLevel'] > 1) {
    echo '<p>Use the following link to manage products</p>';
    echo '<p><a href="../products/">Product Management</a></p>';
    echo '<a href="../accounts?action=update">Update Account</a>';
}
?>

            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
