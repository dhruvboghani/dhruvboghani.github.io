<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+12568183345"><?php  echo $_POST['To'];?></Dial>
</Response>
