<a href="/acme/index.php" id="logo-img"><img src="/acme/images/site/logo.gif" alt="Acme logo"></a>
<div id="my-account">
    <span>

        <?php if (isset($cookieFirstname)) {
    echo "<span>Welcome $cookieFirstname</span>";
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
