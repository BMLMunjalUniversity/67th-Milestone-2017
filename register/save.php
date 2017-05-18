<?php
$ev = trim($_POST['r']);
file_put_contents("../registrations/".$ev."-".time()."-".mt_rand(1000,9999).".json", json_encode($_POST));
header("Location: /register/?wp=1", 302);
