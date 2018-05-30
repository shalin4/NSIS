<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        /*Nav bar css*/
        #navArea{
            background-color: #fffcc9;
            margin: 1px;
        }
        #body{
            background-color: #7d3102;
        }
        #schoolName{
            color: #7d3102;
        }
        #navBarButtons{
            margin-top: 10px;
        }
        #navBarButtons1,#navBarButtons2,#navBarButtons3{
            margin-right: 5px;
            background-color: #7d3102;
            color: #fffcc9;
            box-shadow: 0px 2px #b3b5b7;
        }

        #footer{
            background-color: #fffcc9;
            height: 25px;
            margin-left: -10px;
            margin-right: -10px;
            color: #7d3102;



        }
    </style>

    <meta charset="UTF-8">

    <link href="<?php echo base_url(); ?>vendor/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


</head>
<body id="body" class="container-fluid">

<nav class="navbar navbar-default">
    <div id="navArea" class="container-fluid">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="navBarButtons">
                <input id="navBarButtons1" class="btn btn-primary" type="button" value="Shortcut">
                <input id="navBarButtons2" class="btn btn-primary" type="button" value="Logged in as Admin">
                <input id="navBarButtons3" class="btn btn-primary" type="button" value="DashBoard">
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <h2 id="schoolName"><b>NSIS-NEGOMBO</b></h2>

            </ul>
        </div>
    </div>
</nav>
<!-- Nav bar Over -->
