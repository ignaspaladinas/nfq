<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Knygu sarasas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div class="wrapper">	
           
            <div id="content">
                    <?php
                
                $servername = "mysql.hostinger.lt";
$username = "u158748101_ignas";
$password = "slaptazodis";
$database = "u158748101_knygo";
                            $conn = mysqli_connect($servername, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }	
                            mysqli_set_charset($conn, 'utf8');
                            echo "<h1 style='color:red'>GITHUB REPOZITORIJA-><a href='https://github.com/ignaspaladinas/nfq'>GITHUB</a></h1>";
                            $sql="SELECT * FROM `TABLE 1`";
                            $result = mysqli_query($conn,$sql);
                            echo '<table  id="table" border="solid 1px">';
                            echo '<col width="30%"><col width="30%"><col width="20%"><col width="20%">';
                            echo '<tr>';
                            echo '<th>Autorius</th>';
                            echo '<th>Pavadinimas</th>';
                            echo '<th>Leidimo metai</th>';
                            echo '<th>Žanras</th>';
                            echo '</tr>';
                            
                            while ($row=mysqli_fetch_array($result)){
                                $nr = $row['id'];
                                echo '<tr>';
                                echo '<td class="a" id="autorius">'.$row['autorius'].'</td>';
                                echo '<td class="a" id="pavadinimas"><a id="pav" href="info.php?id='.$nr.'">'.$row['pavadinimas'].'</a></td>';
                                echo '<td class="a" id="metai">'.$row['metai'].'</td>';
                                echo '<td class="a" id="zanras">'.$row['zanras'].'</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        ?>
            </div>
            
        </div>
    </body>
</html>


