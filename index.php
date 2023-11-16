<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dingus & Zazzy</title>
</head>
<body>

<header>
    <div class="logo">
        <a href="/">
            <img src="Dingus-and-Zazzy-Logo.png" alt="Your Logo">
        </a>
    </div>
    <nav>
        <ul>
            <?php
                $menuItems = ['Services', 'About', 'Work', 'Pricing', 'FAQs', 'Careers', 'Contact'];

                foreach ($menuItems as $item) {
                    echo '<li><a href="#">' . $item . '</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>

</body>
</html>
