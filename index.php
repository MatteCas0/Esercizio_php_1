<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="w-25 mx-auto my-5 text-center height-50">
        <h1 class="text-white">Numeri divisibili per 3 da 1 a 100</h1>
        <table class="table table-dark fst-italic rounded-5">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
