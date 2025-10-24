<?php
	echo '<pre>';
	system("tail -n 999999 /var/log/nginx/*.log /var/log/mail.log /usr/share/nginx/logs/*");
?>