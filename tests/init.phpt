--TEST--
Check for panda presence
--SKIPIF--
<?php if (!extension_loaded("panda")) print "skip"; ?>
--FILE--
<?php
echo "panda extension is available" . PHP_EOL;
echo default_value("int",1017109588) . PHP_EOL;
echo default_value("str",'Panda') . PHP_EOL;
/*
        you can add regression tests for your extension here

  the output of your test code has to be equal to the
  text in the --EXPECT-- section below for the tests
  to pass, differences between the output and the
  expected text are interpreted as failure

        see php7/README.TESTING for further information on
  writing regression tests
*/
?>
--EXPECT--
panda extension is available
1017109588
Panda
