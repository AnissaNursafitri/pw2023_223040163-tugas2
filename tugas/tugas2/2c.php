<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c-ns</title>
    <style>

        .color{
            width: 15px;
            height: 15px;
            text-align: center;
            border: 1px solid black;
            background-color: blue;
        }
    </style>
</head>
<body>


    <table cellpadding="10" cellspacing="0">
        <?php for($n= 10; $n >= 1; $n--) :?>
            <tr>
            <?php  for($s = 1; $s <= $n; $s++) :?>
                <td class="color"><?= "$s"; ?></td>
            <?php endfor; ?>
            </tr>
        <?php  endfor;?>
        
    </table>
</body>
</html>