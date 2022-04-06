<?php include("class_lib.php"); ?>
<?php
    $grace = new person();
    $derick = new person;

    $grace->set_name("grace fiana");
    $derick->set_name("derick mane");

    echo "Grace full name:" . $grace->get_name();
    echo "<br/>";
    echo "derick's full name: " . $derick->get_name();
?>