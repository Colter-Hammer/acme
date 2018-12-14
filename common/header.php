<a href="/acme/index.php"><img src="/acme/images/site/logo.gif" id="logo-img" alt="Acme logo"></a>
<div id="my-account">
    <span>

        <?php if (isset($_SESSION['welcomeMessage'])) {
            echo "<span><a href='/acme/accounts'>$_SESSION[welcomeMessage]</a></span>";
} 
elseif (isset($_COOKIE['firstname'])) {
    echo "<span>Welcome $_COOKIE[firstname]</span>";
}

if (isset($_SESSION['loggedin'])) {
    echo '<a href="/acme/accounts?action=logout"><img src="/acme/images/site/account.gif" alt="My Account">Logout</a></span>';

} else {
    echo '<a href="/acme/accounts?action=login"><img src="/acme/images/site/account.gif" alt="My Account">My
            Account</a></span>';

}
?>
</div>

<!-- Debug template stuff -->
<!-- <span id="template"> -->
<!-- <a href="/acme/index.php?action=template">Template page</a></span> -->
