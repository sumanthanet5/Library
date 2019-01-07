<?php
include"inc/connection.php";

$id=$_GET['id'];
mysqli_query($link,"UPDATE student_registration set status='yes' where id=$id");
?>

<script type="text/javascript">
	

window.location="display_student_info.php";


</script>