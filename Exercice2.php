<?php 
declare(strict_types=1);
$notes = [12, 15, 8, 17, 9, 14, 11];
$prenoms = ['Sara', 'Youssef', 'Imane', 'Omar', 'Khadija'];
 echo $notes[0];
echo $notes[array_key_last($notes)];

echo count($notes);

for ($i=0;$i<count($notes);$i++){
    echo $notes[$i];
}
$i=0;
foreach($notes as $note){
    echo $note;
    $i++;
}

foreach($prenoms as $i=>$prenom){
echo ($i+1)." . ".$prenom."<br>"; 
}