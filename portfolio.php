<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.image-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Creates responsive columns */
  gap: 250px; /* Adds space between grid items */
}

.image-grid figure {
  margin: 0; /* Removes default figure margin */
}

.image-grid img {
  width: 100%;
  height: 100%;
  display: block; /* Removes extra space below the image */
}

.image-grid figcaption {
    
  text-align: center; /* Centers the caption text */
  
   /* Example background for the caption */
}

header {
    background-color: white;
    color: rgba(0, 0, 0, 0.18);
    padding: 10px 0;
    position: fixed;
    width: 100%;
    z-index: 100;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 5px auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #b73636ff;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    color: rgba(0, 0, 0, 0.28);
    padding: 10px;
    font-weight: bold;
    text-decoration: none;
}

.nav-links a:hover {
    background-color: #40b736;
    border-radius: 4px;
    color: white;
}

.portfolio {
    background: rgba(251, 232, 222, 0.52);
    
    padding: 100px 0 20px 0;
    text-align: center;
}

.portfolio h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.portfolio p {
    font-size: 1rem;
    color: #323030;
    max-width: 800px;
    margin: 0 auto;
}
    </style>
	<title>contact</title>
	
  


</head>

<body>
<div class="container">
 <header>
        <nav>
            <div class="logo">
              Interior
              </div>
            <ul class="nav-links">
                <li><a href="home.php">
                  Home</a>
                  </li>
                <li><a href="about.php">
                  About</a>
                  </li>
                <li><a href="portfolio.php">
                  Portfolio</a>
                  </li>
  <li><a href="pricing.php">
                  Pricing</a>
                  </li>

				  <li><a href="contact.php">
                  Contact</a>
                  </li>
            </ul>
        </nav>
    </header>

<section class="portfolio">
        <h1>Our Portfolio</h1>
<div class="image-grid">
  <figure>
    <img src="images/5.PNG" alt="Description of image 1">
    <figcaption>Traditional </figcaption>
  </figure>
  <figure>
    <img src="images/6.PNG" alt="Description of image 2">
    <figcaption>Modern</figcaption>
  </figure>
 <figure>
    <img src="images/7.PNG" alt="Description of image 2">
    <figcaption>Contemporary</figcaption>
  </figure>
 <figure>
    <img src="images/8.PNG" alt="Description of image 2">
    <figcaption>Rustic</figcaption>
  </figure>
   <figure>
    <img src="images/9.PNG" alt="Description of image 2">
    <figcaption>Urban</figcaption>
  </figure>
   <figure>
    <img src="images/10.PNG" alt="Description of image 2">
    <figcaption>Ecelectic</figcaption>
  </figure>
  
  </div>

</section>


</div>
<script.src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>