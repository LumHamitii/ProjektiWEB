<?php

    session_start();
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    
        <table>
            <tr>
                <th>ID Produktit</th>
                <th>description</th>
                <th>Qmimi</th>
                
            </tr>
            <?php
           if (isset($_SESSION["cart"])) {
           
                foreach ($_SESSION["cart"] as $keys => $products) {
                    ?>
                    <form action="" method="post">
                       
                        <tr>
                        <td>
                                <?php echo $products["Id"]; ?>
                            </td>
                            <td>
                                <?php echo $products["description"]; ?>
                            </td>
                           
                            <td>
                                <?php echo $products["price"]; ?> €
                            </td>
                            
                        </tr>
                    </form>
                    <?php
                    
                }
            }else{ echo "error";}
                ?>

            </table>
            </body>
            </html>