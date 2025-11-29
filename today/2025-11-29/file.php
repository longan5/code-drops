<?php
$handle=fopen("file.txt","r");
if (!$handle) {
    echo "Unable to open file!";
}else{
    while(!feof($handle)){
        $line=fgets($handle);
        echo $line;
    }
}
?>