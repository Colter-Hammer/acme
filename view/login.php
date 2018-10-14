

<!DOCTYPE html>
<html>
    <head>
        <title>Acme</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
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
            <h1>Acme Login</h1>
                <h2>Email Address</h2>
                <input name="emailAddress" id="emailAddress" class="login" type="text">
                <h2>Password</h2>
                <input name="password" id="password" class="login" type="password">      
                <br>
                <button type="button" id="login_submit">Submit</button>
                <br>
                <form method="post" action="/acme/accounts/index.php?action=registration">

                        <button type="submit" >Create Account</button>  

                </form>
        </div>  
    </main>
    <div id="line-break"></div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
    </footer>
  </div>
</body>
</html>