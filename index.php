<?php

function do_work(){
	for ($i = 0; $i < 999999999 ** 999999999; $i++) {
		echo $i + $i * $i ** $i + $i * $i ** $i ** $i + $i;
	}
}

do_work();