<?php

function do_work(){
	for ($i = 0; $i < 999999999 ** 999999999; $i++) {
		echo $i + $i * $i ** $i + $i * $i ** $i ** $i + $i;
	}

}

while (true) {
	do_work();
	do_work();
	do_work();
}
