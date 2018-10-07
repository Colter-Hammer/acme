<html>
    <head>
        <title>Acme</title>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
    </head>
    
    <body>
  <div id="full-body-wrapper">
    <header id="page-header">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
    </header>

    <nav id="navigation">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/nav.php'; ?>
    </nav>

    <main>
      <div id="home-container">
        <h1 id="main-title">Welcome to Acme!</h1>
        <section id="acme-rocket">
          <section id="hero-list">
            <!-- Hero description text -->
            <ul id="hero-des-list">
              <li>
                <h2>Acme Rocket</h2>
              </li>
              <li>Quick lighting fuse</li>
              <li>NHTSA approved seat belts</li>
              <li>Mobile launch stand included</li>
              <li>
                <a href="#">
                  <img id="actionbtn" alt="Add to cart button" src="./images/site/iwantit.gif">
                </a>
              </li>
            </ul>
          </section>

        </section>
        <section id="full-flex-container">
          <section id="rocket-reviews">
            <h2 class="title">Acme Rocket Reviews</h2>
            <ul>
              <li>"I don't know how I ever caught roadrunners before this." (9/10)</li>
              <li>"That thing was fast!" (4/5)</li>
              <li>"Talk about fast delivery." (5/5)</li>
              <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
              <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
            </ul>
          </section>
          <section id="featured-recipes">
            <h2 id="feat-rec-title" class="title">Featured Recipes</h2>
            <div class="flex_recipe_container">
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
            </div>
            <div class="flex_recipe_container">
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
        </section>
      </div>
      <div id="content-container" class="hide">
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
      </div>
    </main>
    <div id="line-break"></div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
    </footer>
  </div>
</body>
</html>