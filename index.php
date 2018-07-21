<?php
 session_start();
 $con = mysqli_connect("localhost","root","","mydb") ;
 $sql = "select * from book";
 $reader = mysqli_query($con,$sql);
 //$row = mysqli_fetch_array($reader);
 $num = mysqli_num_rows($reader);
 $_SESSION['total']= $num ;

?>

<html>
 <head> <title> Index </title>
 </head>
 
 <body>
  <table border="2" bgcolor="pink" width="400">
  <form action="http://localhost/delete/deletion.php" method="POST">
  <tr> <th> Book_ID </th>  <th> Name </th>  <th>  Prices </th> <th> Delete </th> </tr>
    <?php
	 for($i=1; $i<=$num ; $i++)
	 {
		$row = mysqli_fetch_array($reader);
		?>
		<tr>
		<td> <?php echo $row['id']; ?> </td> 
		<td>  <?php echo $row['name']; ?> </td>
		<td> <?php echo $row['price']; ?>  </td> 
		<td> <input type="checkbox" value="<?php echo $row['id'];?>" name="<?php echo'b'.$i ;?>"> </td>
		
		</tr>
     <?php		
	 }
	?>
  <tr> <td colspan="4"> <input type="submit" name="del_btn" value="Delete"></td> </tr>
  </form>
  </table>
 
 </body>
</html>