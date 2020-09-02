<?php
$name = "Jonas";
$lastname = "Jonaitis";
$amzius = "39";
$pomegiai = [];
$pomegiai = [
    0=>'Programuoti',
    1=>'Zvejoti',
    2=>'Keliauti'
];
$data = [
    'Komp-1'=>'MacBook',
    'Phone-15'=>'Iphone',
    'Job' =>'Developer'
];   
$workers = [
    'IT' =>[
        'Jonas',
        'Andrius',
        'Karolis'
    ],
    'ADMIN' =>[
        'Ieva',
        'Simona',
        'Irma'
    ]
];
$total = 1;

$counter = count($data);


/* For ciklas
for ($i=0; $i<$counter;$i++){
    echo "$data[$i]<br>"*/

 /*   foreach($data as $id => $student){
        echo "$id:$student";
    }
    foreach($workers as $id => $workeriai){
        echo "$id$workeriai";
    */   
?>
<ul>
<?php foreach($workers as $id => $workeriai):?>
    <li><?=$id;?>
    <ul>
    <?php foreach($workers[$id] as $workeriai):?>
    <li><?=$workeriai;?></li>
    <?php endforeach ?>
    </ul>
    </li>
<?php endforeach ?>
</ul>
