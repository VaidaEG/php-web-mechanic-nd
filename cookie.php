<?php
_d('$_COOKIE');
_d(rawurlencode('saldus braškinis su klevų sirupu'));
// set and delete cookie
// setcookie('Mano-Pirmas-kukis' , 'saldus braškinis su klevų sirupu' , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool
setcookie ('Mano-pirmas-kukis', 'saldus braškinis su klevų sirupu', time() - 60);
setcookie ('Mano-antras-kukis', 'saldus braškinis su klevų sirupu', time() + 80000, '/'); 
?>