<?php 

function test ($callBack) {

	//Processo Lento

	$callBack();

}

test(function(){

	echo "Terminou";

});



 ?>