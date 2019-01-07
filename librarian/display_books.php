<?php  

session_start();
if (! isset($_SESSION["librarian"])) 

{
    ?>
<script type="text/javascript">
    
window.location="login.php";

</script>

    <?php
}


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

                    

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Display Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                       <form name="form1" action="" method="post">
                        <input type="text" name="t1" class="form-control" placeholder="Enter books name">
                        <input type="submit" name="submit1" value="Search books" class="btn btn-default">
                           

                       </form>        


 <?php

if (isset($_POST["submit1"]))
 {
   $res= mysqli_query($link,"SELECT * from add_books where books_name like('$_POST[t1]%')");
   echo "<table class='table table-bordered'>";
 echo"<tr>";
    echo "<th>";  echo"Books name"; echo "</th>";
    echo "<th>";  echo"Books image"; echo "</th>";
    echo "<th>";  echo"Author name"; echo "</th>";
    echo "<th>";  echo"Publication name"; echo "</th>";
    echo "<th>";  echo"Purchase date"; echo "</th>";
    echo "<th>";  echo"Books price"; echo "</th>";
    echo "<th>";  echo"Books quantity"; echo "</th>";
    echo "<th>";  echo"Available quantity"; echo "</th>";
     echo "<th>";  echo"Delete Books"; echo "</th>";

echo"</tr>";
   while ($row =mysqli_fetch_array($res)) {
   echo"<tr>";
    echo "<td>";  echo $row["books_name"]; echo "</td>";

    echo "<td>";?> <img src="<?php echo $row["books_image"];?>" height="100" width="100">  <?php  echo "</td>";



    echo "<td>";   echo $row["books_author_name"]; echo "</td>";
    echo "<td>";   echo $row["books_publication_name"]; echo "</td>";
    echo "<td>";   echo $row["books_purchase_date"]; echo "</td>";
    echo "<td>";   echo $row["books_price"]; echo "</td>";
    echo "<td>";   echo $row["books_qty"]; echo "</td>";
    echo "<td>";   echo $row["available_qty"]; echo "</td>";



 echo "<td>";  


?> <a href="delete_books.php?id=<?php echo $row["id"] ;?>">Delete Books</a><?php

     echo "</td>"; 




echo"</tr>";



   }
 echo "</table>";
}
else
{


   $res= mysqli_query($link,"SELECT * from add_books");
   echo "<table class='table table-bordered'>";
 echo"<tr>";
    echo "<th>";  echo"Books name"; echo "</th>";
    echo "<th>";  echo"Books image"; echo "</th>";
    echo "<th>";  echo"Author name"; echo "</th>";
    echo "<th>";  echo"Publication name"; echo "</th>";
    echo "<th>";  echo"Purchase date"; echo "</th>";
    echo "<th>";  echo"Books price"; echo "</th>";
    echo "<th>";  echo"Books quantity"; echo "</th>";
    echo "<th>";  echo"Available quantity"; echo "</th>";

     echo "<th>";  echo"Delete Books"; echo "</th>";


echo"</tr>";


   while ($row =mysqli_fetch_array($res)) {
   echo"<tr>";
    echo "<td>";  echo $row["books_name"]; echo "</td>";

    echo "<td>";?> <img src="<?php echo $row["books_image"];?>" height="100" width="100">  <?php  echo "</td>";



    echo "<td>";   echo $row["books_author_name"]; echo "</td>";
    echo "<td>";   echo $row["books_publication_name"]; echo "</td>";
    echo "<td>";   echo $row["books_purchase_date"]; echo "</td>";
    echo "<td>";   echo $row["books_price"]; echo "</td>";
    echo "<td>";   echo $row["books_qty"]; echo "</td>";
    echo "<td>";   echo $row["available_qty"]; echo "</td>";

    echo "<td>";  


?> <a href="delete_books.php?id=<?php echo $row["id"] ;?>">Delete Books</a><?php

     echo "</td>"; 

echo"</tr>";



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


<?php  include"inc/footer.php" ?>
       