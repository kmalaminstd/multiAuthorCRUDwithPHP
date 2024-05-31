<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php include "includes/header.php" ?>

    <main class="content blog-listing">
        <div class="container">
            <h1>All Blog Posts</h1>
            <div class="posts">
                <div class="post">
                    <img src="https://source.unsplash.com/random/300x200" alt="Post Image">
                    <div class="post-content">
                        <h2>Blog Post Title 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at dolor ac diam...</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="post">
                    <img src="https://source.unsplash.com/random/300x201" alt="Post Image">
                    <div class="post-content">
                        <h2>Blog Post Title 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at dolor ac diam...</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="post">
                    <img src="https://source.unsplash.com/random/300x202" alt="Post Image">
                    <div class="post-content">
                        <h2>Blog Post Title 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at dolor ac diam...</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Add more posts as needed -->
            </div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>

</body>
</html>
