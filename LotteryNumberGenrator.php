<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
    <title>Home Page</title> 
</head>

<body>
<div class="container">
    <div class="nav">
        <a href="resume.html">Resume</a>
        <a href="games.html">Games</a>
        <a href="contact.html">Contact Me</a>
        <a href="index.html">Home</a>
    </div>
    <div class="mainContent">
        <a><b>Lottery Number Gerator</b></a><br>
        <?php

            $nums = array();

        for ($i = 0; $i < 5; $i++) {
            array_push($nums, rand(1, 69));
        }

        array_push($nums, rand(1, 26));

        foreach ($nums as $num) {
            echo "$num ";
        }

        ?>
        <form method="post">
            <input type="submit" value="Generate">
        </form>
    </div>
</div>
<div class="footer">
    
</div>
</body>

</html>