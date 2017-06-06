<?php

function endsWith($haystack, $needle){
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

if(endsWith(@$_SERVER['HTTP_REFERER'], 'prima.php')){
    header('Location: '.'http://www.scienzaoggi.it/referer_test/referer.php');
}
?>
<script>
/*
var referer='<?php echo @$_SERVER['HTTP_REFERER']?>'
alert('referer: ' + referer)
if(referer.endsWith('prima.php')){
    alert('proviene da prima.php')
    alert('redirect su sito esterno')
    window.location='http://www.scienzaoggi.it/referer_test/referer.php'
}else{
    alert('viene mantenuto su questa pagina (no redirect)')
}
*/
</script>
seconda
