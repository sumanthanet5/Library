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

                    </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issued Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
          <form name="form1" action="" method="post">
                                <table >
                                    <tr>
                                        
                                   <td>
         <select name="enr" class="form-control selectpicker">
                                     
<?php
 $res=mysqli_query($link,"SELECT enrollmentno from student_registration");
 while ($row=mysqli_fetch_array($res)) 

 {   
echo "<option>";

echo $row["enrollmentno"];

echo "</option>";


 }

?>
</select> 

</td>

<td>
<input type="submit" name="submit1" value="Search"

class="form-control btn btn-default" style="margin-top: 5px;"> 

</td>

</tr>
</table>
        
<?php

if (isset($_POST["submit1"])) {
$res5=mysqli_query($link,"SELECT * from student_registration where enrollmentno='$_POST[enr]' ");
while ($row5=mysqli_fetch_array($res5)) 
{
    $firstname=$row5["firstname"];
    $lastname=$row5["lastname"];
    $username=$row5["username"];
    $email=$row5["email"];
    $contact=$row5["contact"];
    $sem=$row5["sem"];
    $enrollmentno=$row5["enrollmentno"];
    $_SESSION["enrollmentno"]=$enrollmentno;
    $_SESSION["susername"]=$username;

}


?>

 <table class="table table-bordered">
<tr>
    <td><input type="text" name="enrollmentno" class="form-control" placeholder="Enrollment No" value="<?php echo $enrollmentno ;?>"   disabled></td>
</tr>

<tr>
    <td><input type="text" name="studentname" class="form-control" placeholder="Student Name" value="<?php echo $firstname.''.$lastname; ?>" required></td>
</tr>

<tr>
    <td><input type="text" name="studentsem" class="form-control" placeholder="Student Sem" value="<?php echo $sem;?>" required></td>
</tr>

<tr>
    <td><input type="text" name="studentcontact" class="form-control" placeholder="Student contact"  value="<?php echo $contact?>"   required></td>
</tr>


<tr>
    <td><input type="text" name="studentemail" class="form-control" placeholder="Student Email" value="<?php echo $email?>" required></td>
</tr>

<tr>
    <td>

<select name="booksname" class="form-control selectpicker">
    
<?php
$res= mysqli_query($link,"SELECT books_name from add_books ");
while($row=mysqli_fetch_array($res))

 {
   echo"<option>";

 echo $row["books_name"];
   echo"</option>";
}


?>

</select>


    </td>
</tr>


<tr>
    <td><input type="text" name="bookissuedate" class="form-control" placeholder="Book issue date" value="<?php echo date("d-m-y");?>" required></td>
</tr>


<tr>
    <td><input type="text" name="studentusername" class="form-control" placeholder="Student User Name" value="<?php echo $username;  ?>"  disabled></td>
</tr>

<tr>
    <td><input type="submit" value="issue books"  class="form-control  btn btn-default" name="submit2" style="background-color: blue; color: white;"></td>
</tr>



</table>
<?php

}

?>
    </form>

<?php

if (isset($_POST["submit2"]) )
{
   $qty=0;
   $res=mysqli_query($link,"SELECT * FROM add_books where books_name='$_POST[booksname]'");
   while ($row=mysqli_fetch_array($res))

    {
       $qty=$row["available_qty"];
   }

if ($qty==0) 
{
     ?>
      <div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white">This book is Out of Stock</strong>
</div> 

<?php
}
else
{
   

    mysqli_query($link,"INSERT into issue_books values('','$_SESSION[enrollmentno]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[booksname]','$_POST[bookissuedate]','','$_SESSION[susername]')");
    mysqli_query($link,"Update add_books set available_qty =available_qty-1 where books_name='$_POST[booksname]'");


?>
<script type="text/javascript">
    
alert("books successfully  issued");
window.location.href=window.location.href;


</script>


<?php
 }

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
       