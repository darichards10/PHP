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
        <a><b>Vigenre Cipher Tool</b></a><br>
        <a>Uses printable ascii values between 32-126<a><br>
        <?php

            $message = $_POST['message'];
            $key = $_POST['key'];
            $output = "";

            if(strcmp($_POST['action'],"encode") == 0) {

                for($i = 0; $i < strlen($message); $i++) {
                    
                    //char to add to current index
                    $adjustment = $key[$i % strlen($key)];
                    $currentChar = $message[$i];

                    $adjustmentVal = ord($adjustment) - 32;
                    $currentIndexVal = ord($currentChar);
                    


                    //ascii sum
                    if($adjustmentVal + $currentIndexVal > 126) {
                        $output = $output . chr($adjustmentVal + $currentIndexVal - 94);
                    } else {
                        $output = $output .  chr($adjustmentVal + $currentIndexVal);
                    }
                    

                    
                }

            
            } else { 

                for($i = 0; $i < strlen($message); $i++) {
                    
                    //char to add to current index
                    $adjustment = $key[$i % strlen($key)];
                    $currentChar = $message[$i];

                    $adjustmentVal = ord($adjustment) - 32;
                    $currentIndexVal = ord($currentChar);
                    


                    //ascii sum
                    if(abs($adjustmentVal - $currentIndexVal) < 32) {
                        $output = $output . chr(abs($adjustmentVal - $currentIndexVal) + 94);
                    } else {
                        $output = $output .  chr($adjustmentVal - $currentIndexVal);
                    }
                
                    
                }

            }


            echo ('<a>' . $output . '</a>');


        ?>
        <form method="post">
            <br>
            <input type="text" name="key" placeholder="key"><br><br>
            <textarea placeholder="Text" name="message"></textarea><br>
            <input type="submit" name="action" value="encode">
            <input type="submit" name="action" value="decode">
            <p name="result"></p> <br>
        </form>
    </div>
</div>
<div class="footer">
    
</div>
</body>

</html>