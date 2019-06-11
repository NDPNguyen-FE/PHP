<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        th,td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $product = [
        ["iphone",2000],
        ["note 9", 500],
        ["huawei", 30]

    ];
    
   
    ?>
    <table style="width:100%">
        <thead>
            <tr>
                <th> ID </th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody> 
        <?php
            $total = 0;
            
            
                for ($a = 0 ; $a < count($product) ; $a++){ ?>
                    <tr>
                        <th><?php echo $a+1 ?></th>
                        <td><?php echo $product [$a][0]?></td>
                        <td><?php 
                            if($product[$a][1]>300 ){
                                echo  $product[$a][1] + ($product[$a][1] * 0.1)  . "$";
                            }
                            else{
                                echo  $product[$a][1]  ."$";
                           
                            
                            }?>
                        </td>
                    </tr>
                    
                    <?php
                   $total = $total + $product[$a][1];
                    
                  
                }?>
                

                

        
           <tr>
               <th>Total</th>
               <th colspan="2" style="text-align: right"><?php echo $total ."$" ?></th>
           </tr>
        </tbody>
    </table>
</body>
</html>