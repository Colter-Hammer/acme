<?php
if (!$_SESSION['loggedin']) {
    header('location:/acme/account?action=login');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Update Account</title>
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
                    <h1>Update Account</h1>
                    <?php
if (isset($message)) {
    echo $message;
}

?>
                    <form method="post" action="/acme/accounts/index.php">
                        <label>First Name</label>
                        <input type="text" name="clientFirstname" id="clientFirstname" <?php if
                            (isset($clientFirstname)) {echo "value='$clientFirstname'" ;}?>
                        required> <br />

                        <label>Last Name</label>
                        <input type="text" name="clientLasttname" id="clientLasttname" <?php if
                            (isset($clientLastname)) {echo "value='$clientLastname'" ;}?>
                        required><br />

                        <label>Email Address</label>
                        <input type="text" name="clientEmail" id="clientEmail" <?php if (isset($clientEmail)) {echo
                            "value='$clientEmail'" ;}?>
                        required>
                        <br />
                        <input type="hidden" name="clientId" <?php if (isset($_SESSION['clientData']['clientId']))
                            {echo "$clientId" ;}?>>

                        <input class="submit" type="submit" name="submit" id="regbtn" value="Update Account">

                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="updateAccount">
                    </form>


                    <h1>Change Password</h1>
                    <form>
                        <input type="password" name="clientPassword" id="clientPassword"> </form>
                </div>
            </main>
            <div id="line-break">
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
