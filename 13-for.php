<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tbl {
            border: 1px solid;
            border-collapse: collapse;
        }

        .tdcolor {
            border: 1px solid blue;
            width: 100px;
            height: 30px;
        }

        .trcolor1 {
            background-color: lightblue;
        }

        .trcolor2 {
            background-color: lemonchiffon;
        }
    </style>
</head>

<body>
    <div style="align-items:center;">
        <form method="post">
            <table>
                <tr>
                    <td>number of rows : </td>
                    <td><input type="number" name="rows"></td>
                </tr>
                <tr>
                    <td>number of column : </td>
                    <td><input type="number" name="columns"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Create Table"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    $row = $_POST['rows'];
    $column = $_POST['columns'];
    settype($row, "integer");
    settype($column, "integer");
    echo "<table class='tbl'>";
    for ($i = 1; $i < $row; $i++) {
        # code...
        if ($i % 2 == 0) {
            # code...
            echo "<tr class='trcolor1'>";
            for ($j = 1; $j < $column; $j++) {
                # code...
                echo "<td class='tdcolor'><td>";
            }
            echo "</tr>";
        } else {
            echo "<tr class='trcolor2'>";
            for ($j = 1; $j < $column; $j++) {
                # code...
                echo "<td class='tdcolor'><td>";
            }
        }
        echo "</tr>";
    }
    "</table>"
    ?>
</body>

</html>