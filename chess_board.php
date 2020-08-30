<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Chess board</h3>
    <table width='270px' cellspacing='0px' cellpadding='0px' border="1px">
        <?php
        for ($row=0; $row <=8; $row++) { 
            echo '<tr>';
            for ($col=0; $col <=8 ; $col++) { 

                $total=$row+$col;
                if ($total%2==0) {
                    echo '<td height=30px width=30px bgcolor=#fffff></td>';
                    # code...
                } else {
                    echo '<td height=30px width=30px bgcolor=#ddddd></td>';

                    # code...
                }
                
                # code...
            }
            # code...
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>