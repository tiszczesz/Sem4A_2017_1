<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw14.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        $items = scandir("gg");
        //var_dump($items);
        foreach ($items as $value) {
            if(is_dir("gg/".$value)){
                 echo "<p>To jest katalog: <span class='wyr'>{$value}</span></p>\n";
            }
            if(is_file("gg/".$value)){
                 echo "<p>To jest plik: <span class='wyr'>{$value}</span>";
                 if(is_executable("gg/".$value)) echo " wykonywalny ";
                 $size = filesize("gg/".$value);
                 echo " rozmiar: {$size} </p>\n";
            }           
        }
        ?>
    </body>
</html>
