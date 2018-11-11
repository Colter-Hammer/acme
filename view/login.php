<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
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
                    <h1>Acme Login</h1>
                    <?php
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
}

?>
                    <form method="post" action="/acme/accounts/">
                        <div>* Indicates required fields</div>
                        <label>Email Address*</label>
                        <input type="email" name="clientEmail" id="clientEmail" <?php if (isset($clientEmail)) {echo
                            "value='$clientEmail'" ;}?> required>
                        <br>
                        <label>Password*</label>
                        <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        <br>
                        <span id="pass_requirements"> Password must include: 8+ characters, 1 uppercase, 1 lowercase, 1
                            number, 1 special character</span>
                        <br>
                        <input class="submit" type="submit" name="submit" id="regbtn" value="Login">
                        <input type="hidden" name="action" value="Login">
                        <br>
                    </form>

                    <form method="post" action="/acme/accounts/index.php?action=registration">

                        <button class="submit" id="createAccount" type="submit">Create Account</button>

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
