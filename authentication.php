<?php  
error_reporting(0); 
session_start();   
    include('connection.php');  
    $user = $_POST['User_ID'];  
    $_SESSION['User_ID'] =$_POST['User_ID'];
    $pass = $_POST['Password'];  
        
		$sql = "select * from users where userid = '$user' and password = '$pass'"; 


        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  ?>
<script language="javascript" type="text/javascript">
           window.location="index.php";
</script>			
	<?php		
        }  else { ?>
          <script language="javascript" type="text/javascript">
		  alert('Login failed. Invalid user ID or password');
           window.location="login.php";
</script>
		<?php } ?>