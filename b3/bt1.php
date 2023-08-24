<?php 
$laptop=["hang" =>"apple",
"dongmay" =>"iphone",
"ram" =>"2GB",
"ocung" =>"8GB",
"cpu" =>"4700U",
"gia" =>"80000000"
];
$laptop['address']="100000000";
$laptop["ram"]= "10GB";
unset($laptop ['cpu']);

foreach($laptop as $key => $value){
    var_dump($key);
    var_dump($value);
    echo"<br>";

}

?>