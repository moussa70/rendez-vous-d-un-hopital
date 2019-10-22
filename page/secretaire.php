
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="formulaire">
<form method="post">
<h1>rendez vous  d'un patient</h1>
<div class="style">
   <div class="container">
            <label>Nom</label><br>
               <input type="text" name="nom"><br>

            <label>Prenom</label><br>
                <input type="text" name="prenom"><br>

            <label>Date de naissance</label><br>
                <input type="date" name="datenaissance" placeholder="jj/mm/aa"><br><br>

            <label>sexe patient</label>
                <input type="radio" name="sexe" id="sexe" value="H" checked="checked">
                  <label for="sexe">H</label>
                <input type="radio" name="sexe" id="sexe" value="F">
            <label for="sexe">F</label><br>

            <label>Telephone</label><br>
               <input type="text" name="phone"><br>
 </div>
<div class="heure">
     <label>DATE RDV</label><br>
       <input type="date" name="daterdv" placeholder="jj/mm/aa"><br>
     <label>HEURE RDV</label><br>
       <input type="text" name="heurerdv" placeholder="hh:mm:ss"><br>

       <input class="submit" type="submit" name="validation" value="AJOUTER RDV">
       </div>
</div>
</form> 
</div>
</body>
</html>