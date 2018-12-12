<?php
if (!$_SESSION['loggedin']) {
    header('Location: /acme/index.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Admin View</title>
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
                <div id="home-container">
                    <h1>Admin View</h1>
                </div>
                <h1>
                    <?php if (isset($clientData)) {echo $clientData['clientFirstname'];} elseif (isset($_SESSION['clientData']['clientFirstname'])) {echo $_SESSION['clientData']['clientFirstname'];} ?>
                </h1>
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <ul id="user_data">
                    <li>ID number:
                        <?php if (isset($clientData)) {echo $clientData['clientId'];} elseif (isset($_SESSION['clientData']['clientId'])) {echo $_SESSION['clientData']['clientId'];} ?>
                    </li>
                    <li>First name:
                        <?php if (isset($clientData)) {echo $clientData['clientFirstname'];} elseif (isset($_SESSION['clientData']['clientFirstname'])) {echo $_SESSION['clientData']['clientFirstname'];} ?>
                    </li>
                    <li>Last name:
                        <?php if (isset($clientData)) {echo $clientData['clientLastname'];} elseif (isset($_SESSION['clientData']['clientLastname'])) {echo $_SESSION['clientData']['clientLastname'];} ?>
                    </li>
                    <li>Email address:
                        <?php if (isset($clientData)) {echo $clientData['clientEmail'];} elseif (isset($_SESSION['clientData']['clientEmail'])) {echo $_SESSION['clientData']['clientEmail'];} ?>
                    </li>
                </ul>

                <?php
                if ($_SESSION['clientData']['clientLevel'] > 1) {
                    echo '<p>Use the following link to manage products</p>';
                    echo '<p><a href="../products/">Product Management</a></p>';
                }
                    echo '<p><a href="../accounts?action=update">Update Account</a></p>';
                ?>

            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
