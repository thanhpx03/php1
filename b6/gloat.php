<!-- <script>
    var a= 100;
    function test(){
        console
    }
</script> -->
<?php
$a =10;
function test($x){
    $x=15;
    // global $a;
    echo $x;
}
echo test($a);
echo"<br>";
echo $a;
?>