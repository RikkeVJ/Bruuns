<?php
	$pagetitle ="Kontakt";
	include("includes/header.inc.php");
?> 
	<h1>Kontakt</h1><hr>
	<article>
    	<h2 class="kontaktoverskrift">Bruun's Galleri</h2>
			<p class="adresse">M.P. Bruuns Gade 25</p>
        	<p class="adresse">8000 Aarhus</p>
        	<p class="adresse">Tlf: 70 20 89 09</p>
        <h2 class="kontaktoverskrift">Centerinformation</h2>
        	<p class="centerinfo">Har du glemt noget i centeret, eller søger du en bestemt butik? Så er det i vores centerinformation du henvender dig.</p>
            <p class="centerinfo">Du finder os på Plan 4 overfor Kvickly.</p>
            <p class="centerinfo">Det er også her du kan købe gavekort, billetter til vores arrangementer og få udleveret diplom hvis du har gennemført vores børnespil etc.</p>   
	</article>
	
	<form id="formular" action="modtag.php" method="post">
    
    	<label for="navn">Navn</label>
    	<input type="text" id="navn" name="navn" requiered placeholder=" Skriv dit navn her"></input>
        
    	<label for="email">Email</label>
    	<input type="email" id="email" name="mailadresse" requiered placeholder=" Skriv din email her"></input>
        
    	<label for="besked">Besked</label>
    	<textarea id="besked" name="besked" required placeholder=" Skriv din besked her"></textarea>
               
    	<label for="submitknap">&nbsp;</label>
    	<input type="submit" id="submitknap" name="sendformularknap" value="Send besked"/>
	</form>

<?php
	include("includes/footer.inc.php");
?>
