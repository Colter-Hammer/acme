<!DOCTYPE html>
<html>

    <head>
        <title>Registration</title>
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
    unset($message);
}
?>
                    <form method="post" action="/acme/accounts/index.php">
                        <div>* Indicates required fields</div>
                        <label>First Name*</label>
                        <input type="text" name="clientFirstname" id="clientFirstname" <?php if
                            (isset($clientFirstname)) {echo "value='$clientFirstname'" ;}?> required><br />
                        <label>Last Name*</label>
                        <input type="text" name="clientLastname" id="clientLastname" <?php if (isset($clientLastname))
                            {echo "value='$clientLastname'" ;}?> required><br />
                        <label>Email*</label>
                        <input type="email" name="clientEmail" id="clientEmail" <?php if (isset($clientEmail)) {echo
                            "value='$clientEmail'" ;}?> required><br />
                        <label>Password*</label>

                        <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br />
                        <span id="pass_requirements"> Password must include: 8+ characters, 1 uppercase, 1 lowercase, 1
                            number, 1 special character</span>
                        <br>

                        <input class="submit" type="submit" name="submit" id="regbtn" value="Register">

                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="register">
                    </form>


                </div>
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
