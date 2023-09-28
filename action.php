<?php
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $Number = $_POST['number'];
    $Adress = $_POST['adress'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!------ boostrap ------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col offset-3 pt-5"> 
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/crop_junaet-removebg-preview (1).png" class="img-fluid py-5 border" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title bg-danger p-3">ID CARD</h5>
                                <ul>
                                    <li>Name:- <?php if(isset($_POST['name'])) {
                echo $name;
            } ?></li>
                                    <li>Number:- <?php if(isset($_POST['number'])){
                echo $Number;
            } ?></li>
                                    <li> Adress:- <?php if(isset($_POST['adress'])){
                echo $Adress;
            } ?></li>
                                    <li> Email:- <?php if(isset($_POST['email'])){
                echo $Email;
            } ?></li>
                                    <li>Password:- <?php if(isset($_POST['password'])){
                echo $Password;
            } ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ js ------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>