<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            text-decoration: none;
        }
        .navbar{
            background: sandybrown;
            font-family: arial, sans-serif;
            padding: auto;
            border-radius: 20px;
            margin: auto;
            width: auto;
            justify-content:center;
        }
        .navdiv{
            display: flex;
            align-items: center;
            justify-content: space-between;
          padding-right: 900px; 
        }
        .logo{
            font-size: 35px;
            font-weight: 500px;
            height: 65px;
            border-radius: 20px;

        }
        li{
            list-style: none;
            display:inline;
        }
        li a{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right: 25px;
        }
        #Logout{
            border: 1px  solid black;
            border-radius: 12px;
            padding: 3px 2px;
            color: black;
        }
      
        </style>
</head>
<body>
   <nav class="navbar">
    <div class="navdiv">
        <image class=logo src="logo.png" alt="logo">
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Add ptoduct</a></li>
    <li><a href="#">Manage users</a></li>
    <li><a href="#" id= Logout>Logout</a></li>
</body>
</html>