<!DOCTYPE html>
<html>
  
<body style ='text-align : center;' >

<style>
#black-cell{

background : black ;
color : white;
}


</style>

<table width="350px" border="1px" cellspacing="0px" height ="300px">
    <?php

      for($row=1;$row<9;$row++)
      {
        $letters = array('a', 'b', 'c','d','e', 'f', 'g','h');
          echo "<tr>";
          for($col=0;$col<8;$col++)
          {
          $total=$row+$col;
          if($total%2==0)
          {
          echo "<td id = 'black-cell' >".$row.$letters[$col]."</td>";
          }
          else
          {
          echo "<td id = 'white-cell' >".$row.$letters[$col]."</td>";
          }
          }
          echo "</tr>";
    }
          ?>

    </table>
</body>
  
</html>