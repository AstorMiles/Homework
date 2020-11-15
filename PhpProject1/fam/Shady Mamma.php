<!DOCTYPE html>
<html>
    <head>
        <title>SHADY MAMMA</title>
        <meta charset="UTF-8">
        <link href="../css/goldie.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <table class="goldie">
        <?php
        $prod1= 7;
        $prod1q= 1;
        $prod2 = 23;
        $prod2q = 3;
        $prod3 = 16;
        $prod3q = 1;
        $prod4 = 60;
        $prod4q = 1;
        $prod5 = 4.25;
        $prod5q = 3;
        $total=$prod1*$prod1q+$prod2*$prod2q+$prod3*$prod3q+$prod4*$prod4q+$prod5*$prod5q;
        ?>
        <tr class="goldie">
          <td class="goldie">Shady Mamma</td>
          <td>Pirkiniai</td>
        </tr>
        <tr class="goldie">
          <td class="goldie"><a href="../index.php"><img src="../images/Shady Mamma.jpg" id="mamma"></a></td>
          <td class="goldiebuys">
            <table class="goldiebuys">
              <tr class="goldiebuys">
                <td class="goldiebuys">PIRKINYS</td>
                <td class="goldiebuys">KAINA</td>
                <td class="goldiebuys">KIEKIS</td>
              </tr>
              <tr class="goldiebuys">
                <td class="goldiebuys">Kosmetikos rinkinys "Kaimo Žibutė"</td>
                <td class="goldiebuys"><?php echo $prod1 ?></td>
                <td class="goldiebuys"><?php echo $prod1q ?></td>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Depiliavimo juostelių rinkinys</td>
                  <td class="goldiebuys"><?php echo $prod2 ?></td>
                  <td class="goldiebuys"><?php echo $prod2q ?></td>
                </tr>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Moteriškas chalatas "Seducer"</td>
                  <td class="goldiebuys"><?php echo $prod3 ?></td>
                  <td class="goldiebuys"><?php echo $prod3q ?></td>
                </tr>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Receptiniai migdomieji "Neoklofelinas" </td>
                  <td class="goldiebuys"><?php echo $prod4 ?></td>
                  <td class="goldiebuys"><?php echo $prod4q ?></td>
                </tr>
                <tr class="goldiebuys">
                  <td class="goldiebuys">Vynas "Labanakt"</td>
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
