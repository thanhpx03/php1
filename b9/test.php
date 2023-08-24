<?php
$pass = "123456";
// echo password_hash($pass, PASSWORD_DEFAULT);
var_dump(password_verify('123456'
        , '$2y$10$3yJfHIIL34Xd1SDjMxnTheXQprKQguAfkm2H7TwdJcwed6Y8yL02y'));

?> 
