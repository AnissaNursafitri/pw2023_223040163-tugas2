<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d-ns</title>
</head>
<body>
    <style>
        .table{
            border:1px solid black;
        }
        .color1{
            height:50px;
            width:50px;
            background-color:black;
        }
        .color2{
            height:50px;
            width:50px;
            background-color:white;
        }
        </style>
        <body>
            <table class="table" cellpadding="10" cellspacing="0">
                <?php for($n = 1;$n <= 5; $n++):?>
                  <tr>
                    <?php for ($s = 1; $s <= 5; $s++): ?>
                        <?php if (($n+$s) % 2 == 0): ?>
                            <td class = "color1">
                                <?php else:?>
                                </td>
                                <td class= "color2">
                                    <?php endif; ?>
                                </td>
                                <?php endfor; ?>
                            </tr>
                            <?php endfor; ?>
                        </table> 
</body>
</html>