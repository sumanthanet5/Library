<?php  


include"inc/header.php";

include"inc/connection.php";

 ?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Search books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

<form name="form1" action="" method="post">
    <table class="table">
        
 <tr>
     <td><input type="text" name="t1"  palceholder="Enter Book name" class="form-control" required></td>
     <td><input type="submit" name="submit1" value="Search books" class="form-control btn btn-default" style="background-color: blue; color: white;"></td>

 </tr>

    </table>


</form>

<?php

if (isset($_POST["submit1"]))

 {
    $i=0;
 $res=mysqli_query($link,"SELECT * FROM add_books where books_name like('%$_POST[t1]%')");

 echo "<table class='table table-bordered'>";

 echo "<tr>";
 while ($row=mysqli_fetch_array($res))

  {
    $i=$i +1;

    echo "<td>";
?> <img src="../librarian/<?php echo $row["books_image"];?>" height="100" width="100"> <?php
    echo "<br>";
    echo "<b>".$row["books_name"]."</b>";

     echo "<br>";
    echo "<b>"."Available Qty:".$row["available_qty"]."</b>";

   if ($i==2)

    {
       echo "</tr>";
       echo "<tr>";
       $i=0;
   }

    echo "</td>";
 }

echo "</table>";

}
else
{
$i=0;
 $res=mysqli_query($link,"SELECT * FROM add_books");

 echo "<table class='table table-bordered'>";

 echo "<tr>";
 while ($row=mysqli_fetch_array($res))

  {
    $i=$i +1;

    echo "<td>";
?> <img src="../librarian/<?php echo $row["books_image"];?>" height="100" width="100"> <?php
    echo "<br>";
    echo "<b>".$row["books_name"]."</b>";

     echo "<br>";
    echo "<b>"."Available Qty:".$row["available_qty"]."</b>";

   if ($i==2)

    {
       echo "</tr>";
       echo "<tr>";
       $i=0;
   }

    echo "</td>";
 }

echo "</table>";

}


  ?>


                            




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php  include"inc/footer.php" ?>
       