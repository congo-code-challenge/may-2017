<?php
	$chaine_entree = "jevaisalamaison";
	$chaine_sortie = "";
	
	
	$dic = file("dict.txt");
	$mot = "";
	
	for($j=0;$j<strlen($chaine_entree);$j++){
		$mot .= $chaine_entree[$j];
		if(in_array($mot."\n",$dic)){
			$chaine_sortie .= $mot." ";
			$mot = "";
		}
	}
	
	echo $chaine_sortie."\n";
