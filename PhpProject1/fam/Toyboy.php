<!DOCTYPE html>
<html>
    <head>
        <title>TOYBOY</title>
        <meta charset="UTF-8">
        <link href="../css/goldie.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <table class="goldie">
        <?php
        $prod1= 10;
        $prod1q= 5;
        $prod2 = 13;
        $prod2q = 1;
        $prod3 = 14;
        $prod3q = 1;
        $prod4 = 40;
        $prod4q = 1;
        $prod5 = 23;
        $prod5q = 2;
        $total=$prod1*$prod1q+$prod2*$prod2q+$prod3*$prod3q+$prod4*$prod4q+$prod5*$prod5q;
        ?>
        <tr class="goldie">
          <td class="goldie">TOYBOY</td>
          <td>Pirkiniai</td>
        </tr>
        <tr class="goldie">
          <td class="goldie"><a href="../index.php"><img src="../images/Toyboy.jpg"></a></td>
          <td class="goldiebuys">
            <table class="goldiebuys">
              <tr class="goldiebuys">
                <td class="goldiebuys">PIRKINYS</td>
                <td class="goldiebuys">KAINA</td>
                <td class="goldiebuys">KIEKIS</td>
              </tr>
              <tr class="goldiebuys">
                <td class="goldiebuys">Kelnaitės "Skylutės"</td>
                <td class="goldiebuys"><?php echo $prod1 ?></td>
                <td class="goldiebuys"><?php echo $prod1q ?></td>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Knyga "Barebacking Cowboy"</td>
                  <td class="goldiebuys"><?php echo $prod2 ?></td>
                  <td class="goldiebuys"><?php echo $prod2q ?></td>
                </tr>
                <tr class="goldiebuys">
                  <td class="goldiebuys">DVD "Vaikinai Neverkia"</td>
                  <td class="goldiebuys"><?php echo $prod3 ?></td>
                  <td class="goldiebuys"><?php echo $prod3q ?></td>
                </tr>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Akiniai nuo saulės</td>
                  <td class="goldiebuys"><?php echo $prod4 ?></td>
                  <td class="goldiebuys"><?php echo $prod4q ?></td>
                </tr>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Depiliavimo juostelių rinkinys</td>
                  <td class="goldiebuys"><?php echo $prod5 ?></td>
                  <td class="goldiebuys"><?php echo $prod5q ?></td>
                </tr>
                <tr class="goldiepays">
                  <td class="goldiepays">Visas apsipirkimas kainavo:</td>
                  <td class="goldiepays"><?php echo $total ?></td>
                </tr>
          </table>
          </td>
        </tr>
      </table>
    </body>
</html>
