<!DOCTYPE html>
<html>

    <head>
        <title>Acme</title>
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
                    <h1>Acme Login</h1>
                    <?php
if (isset($message)) {
    echo $message;
}
?>
                    <form method="post" action="/acme/accounts/index.php">

                        <label>First Name*</label>
                        <input type="text" name="clientFirstname" id="clientFirstname"><br />
                        <label>Last Name*</label>
                        <input type="text" name="clientLastname" id="clientLastname"><br />
                        <label>Email*</label>
                        <input type="email" name="clientEmail" id="clientEmail"><br />
                        <label>Password*</label>
                        <input type="password" name="clientPassword" id="clientPassword"><br />
                        <br>

                        <input class="submit" type="submit" name="submit" id="regbtn" value="Register">

                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="register">
                    </form>

                    <div>* Indicates required fields</div>
                </div>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
