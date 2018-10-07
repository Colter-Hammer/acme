<html>
    <head>
        <title>Acme</title>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
    </head>
    
    <body>
        <section class="wrapper-body">
            <header class="wrapper-head">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?> 
            </header>
            <main class="wrapper-main">
                <h1>Welcome to Acme!</h1>
                <section id="hero">
                <ul>
                    <li><h2>Acme Rocket</h2></li>
                    <li>Quick lighting fuse</li>
                    <li>NHTSA approved seat belts</li>
                    <li>Mobile launch stand included</li>
                    <li><a href="/acme/cart/"><img id="actionbtn" alt="Add to cart button" src="./images/site/iwantit.gif"></a></li>
                </ul>
                </section>
                <section id="advertisement">
                <section id="featured_recipes">
                    <h2>Featured Recipes</h2>
                    <ul>
                        <li>
                            <img class="featured_recipe_img" alt="Featured Roadrunner BBQ" src="./images/recipes/bbqsand.jpg">
                            <p><a href="#">Pulled Roadrunner BBQ</a></p>
                        </li>
                        <li>
                        <img class="featured_recipe_img" alt="Roadrunner Pot Pie" src="./images/recipes/potpie.jpg">
                        <p><a href="#">Roadrunner Pot Pie</a></p>
                    </li>     
                    <li>
                        <img class="featured_recipe_img" alt="Roadrunner Soup" src="./images/recipes/soup.jpg">
                         <p><a href="#">Roadrunner Soup</a></p>
                    </li>
                    <li>
                        <img class="featured_recipe_img" alt="Roadrunner Tacos" src="./images/recipes/taco.jpg">
                        <p><a href="#">Roadrunner Tacos</a></p>
                    </li>

                    </ul>

                </section>
                <section id="rocket_reviews">
                    <h2>Acme Rocket Reviews</h2>
                <ul>
                    <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                    <li>"That thing was fast!" (4/5)</li>
                    <li>"Talk about fast delivery." (5/5)</li>
                    <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                    <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                </ul>
                </section>
                </section>
            </main>
        <hr id="footer-line">
            <footer class="footer-wrapper">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>
        </section>
    </body>
</html>