<?php

ini_set('display_errors',1);
error_reporting(-1);
mail('sajeetf@gmail.com','test mail','this is a test email') || print_r(error_get_last());

?>