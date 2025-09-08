<?php

	$aluno = 'Jorge';
	$nota1 = 2;
	$nota2 = 7;
	$nota3 = 1;
	$nota4 = 3;
	$media = ($nota1+$nota2+$nota3+$nota4)/4;

	echo '<b>Aluno: </b> '.$aluno.'<br>';
	echo '<b>Nota 1: </b> '.$nota1.'<br>';
	echo '<b>Nota 2: </b> '.$nota2.'<br>';
	echo '<b>Nota 3: </b> '.$nota3.'<br>';
	echo '<b>Nota 4: </b> '.$nota4.'<br>';
	echo '<b>Média: </b> '.$media.'<br>';

	if($media>=6){
		echo'Mutcho bien';
	}
	else{ 
		echo'Lixo imundo';
 	}

?>