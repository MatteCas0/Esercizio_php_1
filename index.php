<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numeri divisibili per 3 da 1 a 100</h1>
    <table>
        <tr>
            <th>Numeri divisibili per 3</th>
        </tr>
        <?php
            for ($i=0; $i <= 100 ; $i++) { 
                if($i % 3 == 0) {
                    echo "<tr><td>$i</td></tr>";
                }
            }
        ?>
    </table>
</body>
</html>