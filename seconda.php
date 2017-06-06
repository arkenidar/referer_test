<script>
var referer='<?php echo @$_SERVER['HTTP_REFERER']?>'
alert('referer: ' + referer)
if(referer.endsWith('prima.php')){
    alert('proviene da prima.php')
    alert('redirect su sito esterno')
    window.location='http://www.scienzaoggi.it/referer_test/referer.php'
}else{
    aler('viene mantenuto su questa pagina (no redirect)')
}
</script>
seconda
