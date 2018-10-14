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
                <label>First Name*</label>
                <input name="firstname" id="firstname" class="login" type="text"><br> 
                <label>Last Name*</label>
                <input name="lastname" id="lastname" class="login" type="text"><br>  
                <label>Email*</label>
                <input name="email" id="email" class="login" type="text"><br> 
                <label>Password*</label>
                <input name="password" id="password" class="login" type="password">  <br>  
                <br>
                <button type="button" id="login_submit">Submit</button>
                

                <div>* Indicates required fields</div>
      </div>
    </main>
    <div id="line-break"></div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
    </footer>
  </div>
</body>
</html>