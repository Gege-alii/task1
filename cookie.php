<?php

//2.Use a cookie to change the default website background color. choose the new color from a dropdown menu of colors. 

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('background_color', $color, time() + (86400 * 40), "/"); 
    $_COOKIE['background_color'] = $color; 
}
$backgroundColor = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        body {
            background-color: <?php echo htmlspecialchars($backgroundColor); ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container" data-aos="zoom-in" data-aos-duration="2000">
        <h1 class="mb-4">Change the Background Color</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="color" class="form-label">Choose a color:</label>
                <select name="color" id="color" class="form-select">
                    <option value="#ffffff" <?php echo $backgroundColor == '#ffffff' ? 'selected' : ''; ?>>White</option>
                    <option value="#ff0000" <?php echo $backgroundColor == '#ff0000' ? 'selected' : ''; ?>>Red</option>
                    <option value="#ff00ff" <?php echo $backgroundColor == '#ff00ff' ? 'selected' : ''; ?>>Magenta</option>
                    <option value="#00ffff" <?php echo $backgroundColor == '#00ffff' ? 'selected' : ''; ?>>Cyan</option>
                    <option value="#FFA500" <?php echo $backgroundColor == '#FFA500' ? 'selected' : ''; ?>>Orange</option>
                    <option value="#00ff00" <?php echo $backgroundColor == '#00ff00' ? 'selected' : ''; ?>>Green</option>
                    <option value="#0000ff" <?php echo $backgroundColor == '#0000ff' ? 'selected' : ''; ?>>Blue</option>
                    <option value="#ffff00" <?php echo $backgroundColor == '#ffff00' ? 'selected' : ''; ?>>Yellow</option>
                    <option value="#000000" <?php echo $backgroundColor == '#000000' ? 'selected' : ''; ?>>Black</option>
                    <option value="#964B00" <?php echo $backgroundColor == '#964B00' ? 'selected' : ''; ?>>Brown</option>
                    <option value="#808080" <?php echo $backgroundColor == '#808080' ? 'selected' : ''; ?>>Gray</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Change Color</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
