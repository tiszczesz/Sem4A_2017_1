<html>
    <head>
        <meta charset="utf-8" />
        <title>Rzut oszczepem</title>
        <link rel="stylesheet" type="text/css" href="styl_oszczep.css" />
    </head>
    <body>
        <div id="pudlo">
            <div id="baner">
                <h1>Klub sportowy: rzut oszczepem</h1>
            </div>
            <div id="glowny">
                <?php
                function getConnection() {
                    $conn = new mysqli('localhost', 'root', '', 'sportowcy');
                    if ($conn->connect_errno > 0) {
                        echo "<p>Błąd połączenia: " . $conn->connect_error . '</p>';
                        return null;
                    }
                    $conn->set_charset('utf8');
                    return $conn;
                }
                function getRekord($conn){
                    if($conn==null) return "";
                    $sql = "SELECT MAX(wynik) from wyniki WHERE dyscyplina_id=3";
                    $result = $conn->query($sql);
                    return $result->fetch_row()[0];
                }
                function getCount($conn){
                    if($conn===null) return 0;
                    $sql = "SELECT count(*) from sportowiec";
                    $result = $conn->query($sql);
                    return $result->fetch_row()[0]; 
               }
                function getSportowiec($conn, $id){
                    if($conn===null) return "";
                    $sql = "SELECT imie,nazwisko from sportowiec WHERE id={$id}";
                    $result=$conn->query($sql);
                    $row= $result->fetch_row();
                    
                    return "<h3>".$row[0]." ".$row[1]."</h3>";
                }
                function getSrednia($conn,$id){
                     if($conn===null) return "";
                     $sql = "SELECT avg(wynik) from wyniki "
                             . "WHERE dyscyplina_id=3 and sportowiec_id={$id}";
                     $result = $conn->query($sql);
                     return "<p>średni wynik: ".$result->fetch_row()[0]."</p>";
                }
                //$conn = getConnection();
                //var_dump($conn);
                
                //$conn->close();
                ?>
                <h1>Nasz rekord:  <?php 
                $conn = getConnection();
                echo getRekord($conn);
                //$conn->close();
                ?> m</h1>
                <?php
                //$conn = getConnection();
                $ile = getCount($conn);
                echo "<table id='table'>";
                for($i=1;$i<=$ile;$i=$i+2){
                    echo "<tr><td>";
                    echo getSportowiec($conn, $i);
                    echo getSrednia($conn,$i);
                    echo "</td><td>";
                     echo getSportowiec($conn, $i+1);
                    echo getSrednia($conn,$i+1);
                    echo "</td></tr>";
                }
                echo "</table>";
                $conn->close();
                ?>
            </div>
            <div id="stopka">
                <p>Klub sportowy</p><br />
                Stronę opracował xxxxxxxx
            </div>

        </div>
    </body>
</html> 
