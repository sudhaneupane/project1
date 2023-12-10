<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        header{
            width: 100%;
            height: 100vh;
            background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)), url('./pics/water.jpg');
            background-size: cover;
        }
        nav{
            width: 100%;
            height: 100px;
            color: white;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: sans-serif;
        }
        .logo{
            font-size: 2em;
            letter-spacing: 0;
        }
        .menu a{
            text-decoration: none;
            padding: 10px 20px;
            font-size: 20px;
            color: white;
            position: relative;
        }
        .menu a:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            border-bottom: 2px solid indianred;
            transition: 0.4s linear;
        }
        .menu a:hover::before{
            width: 90%;
        }
        .register a{
            text-decoration: none;
            padding: 10px 20px;
            font-size: 20px;
            background: indianred;
            color: white;
            border-radius: 8px;
            transition: 0.4s;
        }
        .register a:hover{
            background: transparent;
            border: 1px solid indianred;
        }
        .date  a:hover{
            background: transparent;
            border: 1px solid indianred;
        }
        .date a{
            text-decoration: none;
            padding: 10px 20px;
            font-size: 20px;
            background: indianred;
            color: white;
            border-radius: 8px;
            transition: 0.4s;
        }
        .dropdown-menu{
            text-decoration: none;
            padding: 10px 20px;
            font-size: 20px;
            background: indianred;
            color: white;
            border-radius: 8px;
            transition: 0.4s;
        }
        .h-text{
            max-width: 650px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
            text-align: center;
            color: white;
        }
        .h-text a:hover{
            background: transparent;
            border: 1px solid indianred;
        }
        .h-text span{
            letter-spacing: 5px;
        }
        .h-text h1{
            font-size: 3.5em;
        }
        .h-text a{
            text-decoration: none;
            background: indianred;
            color: white;
            padding: 10px ,20px;
            letter-spacing: 5px;
            transition: 0.4s;
        }
        

    </style>
</head>
<body>
    <header>
        <nav class='navsection'>
            <div class="logo">
            Welcome
            </div>
            <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Menu
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="water.html">Drink Log</a></li>
    <li><a class="dropdown-item" href="#">Drink report</a></li>
    <li><a class="dropdown-item" href="reminder.html">Set Reminder</a></li>
  </ul>
</div>
              
                
                <a href="about.html" target="self">About</a>
                
            </div>
            <div class="register">
            
                <a href="signup.php" taget="self" title="Go to register">Register</a>
                
            </div>
        </nav>
        <section class="h-text">
            <span>Enjoy</span>
            <h1>Drinking Water</h1>
            <br>
            
    <a href="water.html" target="self" title="go to record water intake">Way to Hydration</a>
        </section>

    </header>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    
</body>
</html>


