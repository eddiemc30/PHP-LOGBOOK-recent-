<html>

 <head>

  <title>Size page</title>

 </head>

 <body>
 <form action="wk4selectcolor.php" method="post">

Select the size of the <?php echo intval($_POST['selqty']) ?> widgets you are ordering

<select name="selsize">
 

        <option>Small (£15.75)</option>

        <option>Medium (£16.75)</option>

        <option>Large (£17.75)</option>

        <option>Extra Large (£18.75)</option>

   </select>

   <br/><br/>

   <input type="submit" value="Buy"/>

   <input type="hidden" name="selqty"

   value="<?php echo $_POST["selqty"]?>"/>

  </form>

 </body>

</html>

