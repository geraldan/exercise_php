<?php



    if (isset($_GET['ages'])){
        $age = $_GET['ages'];

        if ( $age >= 18 ){
        $result = "Félicitation vous ête majeur";
        }  else  {
            $result = "Désoler vous ete pas mageur";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php if (isset($result)): ?>
        <H1> <?= $result ?></H1>
    <?php else: ?>
    <?php endif; ?>
       <form method="GET" action="">
               <input type="text" name="ages">
           <button type="submit" class="btn btn-primary btn-lg">Submit</button>
       </form>
</body>
</html>
