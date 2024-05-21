<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luis Manoppo</title>
    <style>
        body {
            background-image: url("black-background.jpg");
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: rgb(175, 173, 173);
            line-height: 2em;
        }
        header, nav, main, footer {
            display: block;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        .gallery img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="banner.jpeg" alt="Banner Image">
        <h1>SELAMAT DATANG</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Home</h2>
            <p>Selamat datang di halaman utama, ada yang bisa dibantu?</p>
        </section>
        <section id="gallery">
            <h2>Gallery</h2>
            <div class="gallery">
                <img src="Luis.jpg" alt="Image 1">
                <img src="Luis1.jpg" alt="Image 2">
                <img src="L.jpg" alt="Image 3">
            </div>
        </section>
        <section id="blog">
            <h2>Blog</h2>
            <?php
            // Fetch blog links from the database
            $sql = "SELECT title, url FROM blog_links";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p><a href='" . $row["url"] . "'>" . $row["title"] . "</a></p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }
            ?>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <div style="display: flex; align-items: center;">
                <img src="gmail.png" alt="gambar" width="2%" height="3%" >
                <p>luismanoppo026@student.unsrat.ac.id</p>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="IG.png" alt="gambar2" width="2%" height="3%" >
                <p>@luisssmanoppo</p>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
