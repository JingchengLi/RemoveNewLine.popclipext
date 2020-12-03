<?php
echo preg_replace('/\r|\n|\/\/|\/\*|\*\/|\*/', ' ', getenv('POPCLIP_TEXT'))
?>
