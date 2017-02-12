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
            $autorius=$row['autorius'];
            $pavadinimas=$row['pavadinimas'];
            $metai=$row['metai'];
            $zanras=$row['zanras'];
           
        }

?>
<html>
    <head>
  
    </head>
    <body>
        <div id="pagrindinis">
       
            <div class="info" data-id="<?php echo $id?>">
                
             
                    <p><?php echo $autorius ?></p>
                    <p>"<?php echo $pavadinimas?>"</p>
                    <p>Leidimo metai: <?php echo $metai ?> m.</p>
                    <p>Žanras: <?php echo $zanras ?></p>
               
                </div>
            
        </div>
    </body>
</html>
