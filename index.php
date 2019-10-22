
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/men.css"/>
        <link rel="stylesheet" href="css/font-min.css"/>
        <title>hopital</title>
    </head>
    <body>
    <div class="container">
    <img src="new5.jpg" alt=""/>
    <form action="configuration/traitement.php" method="POST">
    <div class="form-input">
    <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="username" placeholder="enter your name" />
        </div>
    <div class="form-input">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" name="mdp" placeholder="enter password"/>
        </div>
        <SELECT name="role" >
        <OPTION VALUE="medecin">medecin</OPTION>

        <OPTION VALUE="secretaire">secretaire</OPTION>

        <OPTION VALUE="admin">admin</OPTION>
    </SELECT>
        <input class="submit" type="submit" name="validation" value="connexion">
        </form>    
    </div>
    </body>
    </html>