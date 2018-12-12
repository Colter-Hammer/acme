<!DOCTYPE html>
<html>

    <head>
        <title>Acme</title>
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
                    <h1 id="main-title">Welcome to Acme!</h1>
                    <div id="product-container">
                        <?php echo $featureView;?>
                    </div>

                    <section id="featured-recipes">
                        <h2 id="feat-rec-title" class="title">Featured Recipes</h2>
                        <div class="flex_recipe_container recipes_1">
                            <div id="bbq">
                                <img src="./images/recipes/bbqsand.jpg" alt="">
                                <p>
                                    <a href="#">Pulled Roadrunner BBQ</a>
                                </p>
                            </div>
                            <div id="potpie">
                                <img src="./images/recipes/potpie.jpg" alt="">
                                <p>
                                    <a href="#">Roadrunner Pot Pie</a>
                                </p>
                            </div>
                            <!-- </div>
                        <div class="flex_recipe_container recipes_2"> -->
                            <div id="soup">
                                <img src="./images/recipes/soup.jpg" alt="">
                                <p>
                                    <a href="#">Roadrunner Soup</a>
                                </p>
                            </div>
                            <div id="taco">
                                <img src="./images/recipes/taco.jpg" alt="">
                                <p>
                                    <a href="#">Roadrunner Tacos</a>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- <div id="content-container" class="hide">
                    <h1 id="content-head">Products</h1>
                    <div id="big-container">
                        <img id="content-img" src="#" alt="Content Image">
                        <section id="content-flex-container">
                            <p id="content-description"></p>
                            <div>
                                <p id="made-by"></p>
                                <p id="reviews"></p>
                            </div>
                            <p id="content-price"></p>
                        </section>
                    </div>
                </div> -->
            </main>
            <div id="line-break"></div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
