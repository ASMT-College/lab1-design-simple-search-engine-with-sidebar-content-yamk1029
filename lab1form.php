<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form action="" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
<input type="range" id="a" name= "a" oninput="showValueOFA()" />
<span id="a_value">50</span>
+
<input type="number" id="b" name= "b" value="50" />
=
<output name = "x" for = "a b"></output>
<br/>
<input type="submit" />
</form>
<script>
  function showValueOFA(){
     var a_element = document.getElementById("a_value");
     a_element.innerHTML = document.getElementById("a").value;
  }
</script>

    <?php echo"<h1 style = 'color:red'> hellp php bidhan </h1>";
          if(isset($_POST['submit'])){
        //    echo 'password is:'.$_POST['pwd'];
          }
?>


    <form action="" method="GET">
    <fieldset>
        <div>
           <label for=""> Username</label>
           <input type="text" name="Username">
        </div>
         <div>
           <label for=""> Password</label>
           <input type="password" name="pwd">
         </div>
        
       <div>
           <input type="color" name="" id="">
           <input type="date" name="" id="">
           <input type="submit" value="login" name= "submit"/>
       
       </div>
       </form>
   </fieldset>



    </body>
</html>