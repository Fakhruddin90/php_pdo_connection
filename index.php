<?php
include 'connection_db.php';
include 'create_db.php';
include 'create_table.php';
include 'insert_data.php';
include 'getIDLastInsert.php';
include 'insert_multiple_record.php';
include 'pdo_with_statements.php';

for ($i=0; $i < 10; $i++) { 
    echo "$i <br>";
}

// connection_db();
// create_db();
// create_table();
// insert_data();
// getIDLastInsert();
// insert_multiple_record();
pdo_with_statements();

?>
