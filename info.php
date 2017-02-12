<?php
    
		$id = $_GET['id'];
        $servername = "mysql.hostinger.lt";
$username = "u158748101_ignas";
$password = "slaptazodis";
$database = "u158748101_knygo";
                            $conn = mysqli_connect($servername, $username, $password, $database);
        $sql="SELECT autorius, pavadinimas, metai, zanras FROM `TABLE 1` WHERE id='$id'";
        mysqli_set_charset($conn, 'utf8');
        if ($result=mysqli_query($conn,$sql))
          {
            $row=mysqli_fetch_assoc($result);
            $aut=$row['autorius'];
            $pav=$row['pavadinimas'];
            $met=$row['metai'];
            $zan=$row['zanras'];
           
        }

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="pagrindinis">
       
            <div class="info" data-id="<?php echo $id?>">
                
                <div style="position:absolute; top:25%; left:10%">
                    <h3><?php echo $aut ?></h3>
                    <h2>"<?php echo $pav?>"</h2>
                    <p>Leidimo metai: <?php echo $met ?> m.</p>
                    <p>Žanras: <?php echo $zan ?></p>
                    <p> Informacija apie knygą </p>
                </div>
            </div>
        </div>
    </body>
</html>
