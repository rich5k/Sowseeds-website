<?php
if(isset($_POST['submit'])){
    echo 'submitted';
    echo $_POST['fname'];
    echo 'should print 1st name before me';
}
else{
    echo 'did not submit';
}
?>