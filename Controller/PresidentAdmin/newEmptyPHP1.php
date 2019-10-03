<?php
// retrieve token
if (isset($_GET["token"]) && preg_match('/^[0-9A-F]{40}$/i', $_GET["token"])) {
    $token = $_GET["token"];
}
else {
    throw new Exception("Valid token not provided.");
}

// verify token
$query = $db->prepare("SELECT username, tstamp FROM pending_users WHERE token = ?");
$query->execute(array($token));
$row = $query->fetch(PDO::FETCH_ASSOC);
$query->closeCursor();

if ($row) {
    extract($row);
}
else {
    throw new Exception("Valid token not provided.");
}