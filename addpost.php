<style>
body {
        /*background-image: url("bcg.jpg");*/
} 
 
</style>
<?php
	require "auth.php";
	$secrettoken1 = $_POST["secrettoken1"];
        //echo $secrettoken1;
	//echo "debug>\$secrettoken = $secrettoken <br>\$_SESSION["nocsrftoken"]= ". $_SESSION["nocsrftoken"];
	if(!isset($secrettoken1) or ($secrettoken1 != $_SESSION["nocsrftoken"])){
	echo "Cross site forging detected!!";
	die();
	}
	function addpost($postid,$title,$content,$time,$username){

		$postid = mysql_real_escape_string($postid);
		$title = mysql_real_escape_string($title);
		$content = mysql_real_escape_string($content);
		$time = mysql_real_escape_string($time);
		$username = mysql_real_escape_string($username);
		
		$sql = "INSERT INTO posts VALUES('$postid','$title','$content','$time','$username');";
		//echo "sql=$sql";
		global $mysqli;
		$result = $mysqli->query($sql);
		if($result==TRUE){
		echo "new post has been posted<br>";
		}else{
		echo "error adding post :". $mysqli->error;    
    		}
	} 

	$postid = htmlspecialchars($_POST["Postid"]);
	$title = htmlspecialchars($_POST["Post_title"]);
	$content = htmlspecialchars($_POST["Post_content"]);
	$time = htmlspecialchars($_POST["Time"]);
	$username = htmlspecialchars($_POST["Username"]);
	//echo "debug> username=$username;<br>";
	
	if(isset($postid) and isset($title) and isset($content) and isset($time) and isset($username)){
		addpost($postid,$title,$content,$time,$username);
    	}
?>
<a href='indexafterlogin.php'> Click here to go back to posts</a>
