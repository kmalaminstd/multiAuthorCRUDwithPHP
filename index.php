<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Landing Page</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php include "includes/header.php" ?> 

    <section class="home_hero">
        <div class="container">
            <h1>Welcome to My Blog</h1>
            <p>Discover articles on various topics</p>
            <a href="#" class="cta-button">Read More</a>
        </div>
    </section>

    <main class="home_content">
        <div class="container">
            <section class="featured-posts">
                <h2>Featured Posts</h2>
                <!-- Add featured post previews here -->
            </section>

            <section class="categories">
                <h2>Categories</h2>
                <!-- Add category links/icons here -->
            </section>

            <section class="about">
                <h2>About Me</h2>
                <p>Short bio about the blog author.</p>
            </section>

            <section class="subscribe">
                <h2>Subscribe</h2>
                <p>Sign up for our newsletter!</p>
                <!-- Subscription form -->
            </section>
        </div>
    </main>

    <?php include "includes/footer.php" ?>

</body>
</html>
