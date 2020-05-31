<?php

$data = file_get_contents("https://api.kawalcorona.com/indonesia");

$array = json_decode($data,true);

$virus = $array[0];

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        body{
            font-family: 'Fredoka One', cursive;
            font-family: 'Montserrat Alternates', sans-serif;
        }
        </style>

        <title>Data Corona</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
            <a class="navbar-brand" href="#"><img src="imag/coronavirus-sticker-liloo-illustration-removebg-preview.png" width="40px" alt=""> Kawal Corona</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://github.com/raselsabardila">Github</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://kawalcorona.com/api/">API</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled active" href="#">Instagram</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="container">
            <div class="row" style="margin-top:-30px">
                <div class="col-md-6">
                    <div style="margin-top:100px">
                        <h2 style="font-size:50px;text-shadow:4px 4px 3px #a7a7a7">Kawal</h2>
                        <h1 style="font-size:60px;color:#B94A89;margin-top:-15px;text-shadow:4px 4px 3px #e6b2e0;">Corona Virus</h1>
                        <p style="margin-left:7px;color:#656565">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptatem maxime.</p>
                    </div>
                    <br>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <div style="width:140px;height:160px;background:#fff;border-radius:8px;box-shadow:0px 0px 8px 3px #ffa7ec">
                                        <i class="fa fa-user-plus" aria-hidden="true" style="margin-left:45px;margin-top:20px;font-size:60px;color:#B94A89"></i>
                                        <p style="text-align:center;color:#1e1e1e">Positif</p>
                                        <h4 style="text-align:center;color:#1e1e1e"><?php echo $virus["positif"] ?></h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:140px;height:160px;background:#fff;border-radius:8px;box-shadow:0px 0px 5px 3px #ffa7ec;margin-left:20px">
                                        <i class="fa fa-heartbeat" aria-hidden="true" style="margin-left:40px;margin-top:20px;font-size:60px;color:#B94A89"></i>
                                        <p style="text-align:center;color:#1e1e1e">Sembuh</p>
                                        <h4 style="text-align:center;color:#1e1e1e"><?php echo $virus["sembuh"] ?></h4>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        <div style="width:140px;height:160px;background:#fff;border-radius:8px;box-shadow:0px 0px 8px 3px #ffa7ec;margin-left:20px">
                                        <i class="fa fa-times" aria-hidden="true" style="margin-left:45px;margin-top:20px;font-size:60px;color:#B94A89"></i>
                                        <p style="text-align:center;color:#1e1e1e">Meninggal</p>
                                        <h4 style="text-align:center;color:#1e1e1e"><?php echo $virus["meninggal"] ?></h4>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="imag/coronavirus-sticker-liloo-illustration-removebg-preview.png" alt="" srcset="" style="margin-top:50px;margin-left:70px" width="480px">
                </div>
            </div>
            <p style="text-align:center;margin-top:30px">&copyCopyright : Rachel Sabardila</p>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>