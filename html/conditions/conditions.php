<?php
$file = $_GET['filename'].".txt"; 


$file = substr($file , 0 , 40); // cela pour eviter d'etre bypasser par (Truncation LFI bypasse)

$file = str_replace("\0" , "" ,$file);//cela pour eviter null byte technique , ce beug est pacher if faux enlever cette ligne


if (file_exists($file) && preg_match_all("/\//", $file) <= 1) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
else echo $file." don't exist";

?>

