<?php
/**
 * これを別ドメインに置いて検証
 */
header("P3P:CP='UNI CUR OUR'");
setcookie('test', date('Y/m/d H:i:s'), 0, '/');