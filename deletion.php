<?php
 session_start();
 $con = mysqli_connect("localhost","root","","mydb") ;

 if( isset($_POST['del_btn']) )
 {
	 $size = $_SESSION['total'];
	 
	 for($i=1 ; $i<=$size ; $i++)
	 {
		if( isset($_POST['b'.$i]) )
        {
		   	$id = $_POST['b'.$i] ;
            $sql = "delete from book where id='$id'";
            $result = mysqli_query($con,$sql);
			if(!$result)
				echo mysqli_error($con) ;
			$j++ ;
		}			
	 }
 }
 session_destroy();
 header("location:index.php");
 
?>