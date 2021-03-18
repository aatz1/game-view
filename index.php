<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game View</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
<?php 
    require_once "utils/base.php"
?>
    <div id="body">
        <h1>GAMES</h1>
        <table class="list">
            <?php 
                $search = $base->query("select * from jogos");
                if(!$search) {
                    echo "<p>Search failed</p>";
                } else {
                    if($search->num_rows == 0) {
                        echo "<tr>No registry found</tr>";
                    } else {
                        while($reg=$search->fetch_object()) {
                            echo "<tr><td>$reg->capa<td>$reg->nome";
                            echo "<td>Adm"; 
                        }
                    }
                }
            
            ?>
        </table>
    </div>
    <?php $base->close(); ?>
</body>
</html>