<?php
include 'models/base.php';          // No need to change
include 'models/flags.php';         // No need to change
include 'languages/spanish.php';    // NOTE: Change language here

// echo 'Flags total =' . count($flags);
// echo <br>;
// echo 'Language total =' . count($lang);

for ($i = 0; $i < count($flags); $i++) {
    $html = str_replace($flags[$i], $lang[$i], $html);
}

echo $html;
?>