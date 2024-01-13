<?php session_start();
include("dbconection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<style>
    body{
        padding: 0px;
        margin: 0px;
    }
    *{
        text-decoration: none;
    }
    #navbar{
        background-color: blue;
        padding: 20px;
    }

    .header{
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .header1 img{
        height: 60px;
        width: 60px;
        padding-top: 5px;
    }
    .header .header2{
        margin: 20px;
    }
    li{
        list-style: none;
        display: inline-block;
    }
    li a{
        background: yellow:
    }
    h2{
        color: red;
        background: rgb(79, 90, 142);
        display: inline-block;
    }
    #footer{
        background-color: rgb(204, 179, 74);
        padding: 6px;
    }
</style>
<body>
    <nav id="navbar">
        <div class="header">
            <div class="header1">
                <img src="img/mm.png" alt="img-error">
            </div>
            <div class="header2">
                <ul>
                    <li><a href="#"><button>Home</button></a></li>
                    <li><a href="https://drive.google.com/file/d/1l1X481Uksmf_u8rASCNk88fCwRMh70q0/view" target="_blank"><button>About</button></a></li>
                    <li><a href="#"><button>Contact</button></a></li>
                    </ul>
            </div>
        </div>
    </nav>