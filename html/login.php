<?php
session_start();

$n1 = rand(1,20);
$n2 = rand(1,20);
$soma = $n1+$n2;
$_SESSION['loginADM'] = $n1+$n2;

?>
<script type="text/javascript">
    function Validar(){
    var soma = "<?php echo $soma; ?>";
	var campo = document.getElementById("loginADM").value;
	if(campo == soma){
    $_SESSION['loginADM']
	}else{
	alert("A SOMA ESTA INCORRETA!");
	}
	
        }
</script>



<html>
    <head></head>
    
	
	<body>
    <h1 style="background-color:black;color:#F2CD13; text-align: center; padding-bottom: 40px;  margin-left: -150px;">Login</h1>
	<form action="login_admok.php" method="post" style="border:2px solid black; background-color:#F2CD13; text-align: center; "><br>
         <img src="../img/barbudo.png" width=270 height=330 style= 'float: left; margin-left: 150px;' ><br><br>
         <img src="../img/barberia.png" width=340 height=330 style= 'float: right; margin-right: 260px;' ><br><br>
         <img src="../img/barber.jpg" width=230 height=180 style='float: none; '><br><br> 
      
         <label style='float: none; '>Email</label><input type="text" name="email"/><br><br>
         <label style='float: none;'>Senha</label><input type="password" name="senha"/><br>
         <div style='float: none; margin-left:450px;'>Some: <?php echo "$n1 + $n2 = "; ?></div>
         <input onblur="Validar()" type="text" name="loginADM" id="loginADM" maxlength="2" required="required" size="2"style='float: none; margin-left:450px;'>
         <br><input type="submit" style='float: none; margin-left:-300px;'/>
      <br><br>
    </form>
    
   
    </body>
 </html>