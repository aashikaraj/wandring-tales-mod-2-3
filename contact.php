<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <script src="contact.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
   
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#"><img1 src=""></a>
            <a class="openbtn" onclick="openNav()">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <ion-icon name="close-outline"></ion-icon>
                </a>
                <div class="items">
                    <a href="index.php">Home</a>
                    <a href="aboutus.php">About Us</a>
                    <a href="place.php">Place</a>
                    <a href="cuisine.php">Cuisine</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="form-box">
        <div class="form-value">
            <form action="formLink.php" method="post">
                <h2>
                    Contact Us
                </h2>
                <div class="inputbox">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <input type="text" name="fname" required>
                    <label for="">Name</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="femail" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <input type="text" name="fmsg" required>
                    <label for="">Message</label>
                </div>
                <button class="button" name="fsubmit">   
                    <ion-icon name="send-outline" ></ion-icon>    
                </button>
            </form>
        </div>
    </div>
    <footer>
        <p class="CopyrightText">
            <b>
                &copy;
            </b>-2023
        </p>
        <ul class="sci">
            <li>
                <a class="fb" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li>
                <a class="insta" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
            <li>
                <a class="twit" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
        </ul>
    </footer>
</body>
</html>
