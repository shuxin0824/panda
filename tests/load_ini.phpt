--TEST--
Check for panda presence
--SKIPIF--
<?php if (!extension_loaded("panda")) print "skip"; ?>
--FILE--
<?php
    $ini = show_ini();
    var_dump($ini);
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
array(3) {
  ["panda.numb"]=>
  int(100)
  ["panda.stri"]=>
  string(2) "ab"
  ["panda.boole"]=>
  bool(false)
}


