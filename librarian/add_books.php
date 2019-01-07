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


 include"inc/header.php" ;
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
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Book Info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                             <table class="table table-bordered">
                                <tr>
                                    <td><input type="text" name="booksname" class="form-control" placeholder="Books name" required=""/></td>
                               </tr>

                               <tr>
                                <td>
                                    Select Books image
                                <input type="file" name="f1"  required=""/>
                              </td>
                               </tr>

                               <tr>
                                    <td><input type="text" name="bauthorname" class="form-control" placeholder="books author name" required=""/></td>
                               </tr>

                               <tr>
                                    <td><input type="text" name="pname" class="form-control" placeholder="books publication name" required=""/></td>
                               </tr>

                               <tr>
                                    <td><input type="text" name="bpurchasedt" class="form-control" placeholder="books purchase date" required=""/></td>
                               </tr>

                               <tr>
                                    <td><input type="text" name="bprice" class="form-control" placeholder="books price" required=""/></td>
                               </tr>

                               <tr>
                                    <td><input type="text" name="bqty" class="form-control" placeholder="books qty" required=""/></td>
                               </tr>
                               <tr>
                                    <td><input type="text" name="aqty" class="form-control" placeholder="available qty" required=""/></td>
                               </tr>
                

                               <tr>
                                    <td><input type="submit" name="   submit1" class="btn btn-default submit" value="Add books details"  style="background-color: blue; color:white; " /></td>
                               </tr>

                             </table>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
if (isset($_POST["submit1"]))

 {

 $tm=md5(time());
 $fnm=$_FILES["f1"]["name"];
 $dat="./books_images/".$tm.$fnm;
 $dat1="./books_images/".$tm.$fnm;
 move_uploaded_file($_FILES["f1"]["tmp_name"], $dat);


  mysqli_query($link,"INSERT into add_books values('','$_POST[booksname]','$dat1','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedt]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]',' $_SESSION[librarian]')");
?>


<script type="text/javascript">
    
 alert("books inserted successfully");


</script>

<?php



}





?>



<?php  include"inc/footer.php" ?>
       