	<form action="spil.php" method="post" enctype="multipart/form-data">
    <label for="navn" id="spil">Velkommen til</label><br>
    <input type="text" name="navn" id="navn" placeholder="Skriv dit navn" /><br>
    <label id="knap"><div id="tag">Tag et billede</div><input type="file" name="billede" id="billede" value="upload" />
    <input type="submit" name="send" id="start" value="Start spillet" />
    </form>

   <?php
   if(isset($_GET["besked"])){
	   echo "<h2>" . $_GET["besked"] . "</h2>"; 
   }
   ?>
   

