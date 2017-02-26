<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $a = [3,6,7,4,3];
        $asoc = [
            "niebieski" => "blue",
            "czerwony" => "red",
            "żółty" => "yellow",
            "zielony" => "green"
        ];
        print_r($a);
        print_r($asoc);
        echo $asoc["żółty"];
        echo "<ul>\n";
        foreach ($asoc as $key => $value) {
            echo "<li>Angielski: {$value} polski: {$key}</li>\n";
        }
        echo "</ul>\n";
        $nowa = [
      "0ww"=>["Jan","Nowak",5600],
       ["Adam","Małek",4600],
        ["Anna","Kowal",7600],
        ["Monika","Trzon",3600],
        ["Roman","Burak",3400],
        ["Juliusz","Nowak",5300],
        ["Piotr","Malinowski",3400],
        ["łukasz","Gryk",6700],
    ];
        echo $nowa["0ww"][1];
       echo "<pre>";
        var_dump($nowa);
        echo "</pre>";
        ?>
       
    </body>
</html>
