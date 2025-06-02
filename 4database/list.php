<?php
require_once 'vendor/autoload.php';

use Uph\Database\DB;

$db = DB::getDB();
$q = $db->query('SELECT * FROM todo');
while ($row = $q->fetch(PDO::FETCH_ASSOC)){
    echo <<<LINE
    {$row['id']},
    {$row['task']},
    {$row['status']},
    {$row['create_at']},
    {$row['updated_at']}
    \n
    LINE;

}