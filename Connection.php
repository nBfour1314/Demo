<?php
    $conn = pg_connect("postgres://fducuqddsvgmah:e60411575ecbca5d71b672a3eee05935aa4f6a240d0896c57ed6ac2141a1410b@ec2-18-234-15-247.compute-1.amazonaws.com:5432/dqp0onvttuqbr");
	
    if (!$conn) {
        die("Connection failed");
    }
?>