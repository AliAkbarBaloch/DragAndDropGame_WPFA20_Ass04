<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Drag And Drop Game </title>
</head>

<body>
    <script type="text/javascript">
        function nextPage(){

            window.location='ScoreBoard.php';
        }
    </script>

    <?php session_start(); if ($_SESSION['Login']==="YES") {?>

    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="./bootstrap//js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

    <nav class="navbar navbar-dark bg-dark">
         <a class="nav-link" style="color: white;">Drag and Drop Game</a>
    
    </nav>
    <div class="container ">
        <!-- <h1 class="d-flex align-items-center justify-content-center">Drag and DropGame</h1> -->
        <div class="row">
            <div class="col-6">
                <h3>Player Name:<strong><span ><?php echo $_SESSION['player_name']; ?></span></strong></h3>
            </div>
            <div class="col-6">
                <h3>Player ID:<strong><span ><?php echo $_SESSION['player_id']; ?></span></strong></h3>
            </div>


            <div class="col-6">
                <h3>Points:<strong><span id="points">0</span></strong></h3>
            </div>
            <div class="col-6">
                <h4>Level:<strong><span id="level">1</span></strong></h4>
            </div>
        </div>

        <p id="timer"></p>
        <h4>Source Images:</h4>

        <div class="row" id="source">
            <div class="col-md-2 col-4 sourceDiv">
                <img id="s6" draggable="true" class="source image-size img-thumbnail" src="./img/s6.jpeg" alt="">
            </div>

            <div class="col-md-2 col-4 sourceDiv">
                <img id="s5" draggable="true" class="source image-size img-thumbnail" src="./img/s5.jpeg" alt="">
            </div>

            <div class="col-md-2 col-4 sourceDiv">
                <img id="s4" draggable="true" class="source image-size img-thumbnail" src="./img/s4.jpeg" alt="">
            </div>
            <div class="col-md-2 col-4 sourceDiv">
                <img id="s3" draggable="true" class="source image-size img-thumbnail" src="./img/s3.jpeg" alt="">
            </div>

            <div class="col-md-2 col-4 sourceDiv">
                <img id="s2" draggable="true" class="image-size img-thumbnail source" src="./img/s2.jpeg" alt="">
            </div>

            <div class="col-md-2 col-4 sourceDiv">
                <img id="s1" draggable="true" class="source img-thumbnail image-size" src="./img/s1.jpeg" alt="">
            </div>

        </div>




        <h4>Destination Images</h4>
        <div class="row" id="destination">
            <div class="col-md-2 col-4 destDiv"><img id="d1" draggable="true" class="dest img-thumbnail image-size"
                    src="./img/d1.jpeg" alt=""></div>
            <div class="col-md-2 col-4 destDiv"><img id="d2" draggable="true" class="dest img-thumbnail image-size"
                    src="./img/d2.jpeg" alt=""></div>
            <div class="col-md-2 col-4 destDiv"><img id="d3" draggable="true" class="dest img-thumbnail image-size"
                    src="./img/d3.jpeg" alt=""></div>
            <div class="col-md-2 col-4 destDiv"><img id="d4" draggable="true" class="dest img-thumbnail image-size"
                    src="./img/d4.jpeg" alt=""></div>
            <div class="col-md-2 col-4 destDiv"><img id="d5" draggable="true" class="dest img-thumbnail image-size"
                    src="./img/d5.jpeg" alt=""></div>
            <div class="col-md-2 col-4 destDiv"><img id="d6" draggable="true" class="dest img-thumbnail image-size"
                    src="./img/d6.jpeg" alt=""></div>
        </div>
        <div><button class="btn btn-md-2 col-4 btn-primary" id="reset">Reset</button></div>
        <div><button class="btn btn-md-2 col-4 btn-primary" id="Close" style="margin-left: 70%;margin-top: -5%;" onclick="nextPage();">Close(For Storing Data in Database)</button></div>
    </div>


    <?php }
     else{
        echo "<script>alert('Before Applying Game you should do Entry');
                   window.location='Entry.php';
        </script>";
     }
     ?>

</body>

</html>