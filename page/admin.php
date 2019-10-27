
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrateur</title>
         <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div id="header">
            <div class="logo"><a href="#">HOPITAL</a></div>
            <div class="deco">
            <i class="fa fa-comments fa-2x" style="color:red" aria-hidden="true"></i>
            <i class="fa fa-user fa-2x" style="color:red" aria-hidden="true"></i>
            <input class="submit" type="submit" name="validation" value="deconnexion">
            </div>
     </div>
<div id="container">
    <div class="sidebar">
    <ul id="nav">
       <ol><a class="selected" href="#"><span class="fa fa-home"></span>Tableau de Bord</a></ol>
       <ol><a href="#">secretaire</a></ol>
       <ol><a href="#">medecin</a></ol>
       <ol><a href="#">admin</a></ol>
       
</ul>
    </div>
    <div class="content">
        <table class="table" aria-describedby="table">
            <thead>
                <tr> 
                        <th id>prenom</th>
                        <th id>nom</th>
                        <th id>username</th>
                        <th id>password</th>
                        <th id colspan="2">Action</th>
                </tr>
           </thead>
            <tbody>
                <tr>
                <th id><?php echo $row['prenom']; ?></th>
                <th id ><?php echo $row['nom']; ?></th>
                <th id><?php echo $row['username']; ?></th>
                <th id><?php echo $row['passwd']; ?></th>
                    <td>
                        <a href="#">Edit</a>
                    </td>
                    <td>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <form method="post" action="adminserver.php">
            <div class="input-group">
                <label>prenom</label>
            <input type="text" name="prenom">
            </div>
            <div class="input-group">
                <label>nom</label>
            <input type="text" name="nom">
             </div> 
             <div class="input-group">
                <label>username</label>
            <input type="text" name="username">
             </div> 
             <div class="input-group">
                <label>password</label>
            <input type="text" name="password">
             </div>
             <div class="input-group">
            <button type="submit" name="save" class="btn">save</button>
             </div> 
        </form> 
              
</div>
</div>
<script src="js/admin.js"></script>
    
</body>
</html>