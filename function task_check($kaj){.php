<?php
function task_check($kaj){
    $home_work = $kaj;
    if($home_work == "done"){
        echo "jaw akn rest, ghumaw.";
    }
    else {
        echo "agee kaj ses koro poree baki kota...";
    }
}
task_check("kaj baki acee");
?>