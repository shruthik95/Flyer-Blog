<style>
body {
         /*background-image: url("bcg.jpg");*/
} 
 
.button {
    border-radius: 12px;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 100px;

}

form {
  text-align: center;
}
h1{
  padding-top:250px;
  text-align: center;
}
</style>
<h1>Login</h1>
<?

echo '<center>' ."<br>current time: " . date("Y-m-d h:i:sa") . '</center>'  ;
echo "<br>";
?>
<form action="adminstrator.php" method="POST" class="form login">
Username:<input type="text"  name="username" placeholder= "Username*" required pattern="\w+"/> <br><!--/*required pattern="\w+"-->
Password: <input type="password"   name="password" placeholder= "Password*"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/> <br><!--required pattern="(?=.*[A-Z]).{6,}"-->
<br><button  class ="button" type="submit">Login</button>
</form>
<form action="newuserform.php" method="POST" class="form login">
<button class ="button" type="submit" >Signup!</button>

</html>

