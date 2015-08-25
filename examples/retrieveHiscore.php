<?php

/**
 * File: PhpOSRS/examples/retrieveHiscore.php
 * Author: Robin Rijkeboer <rmrijkeboer@gmail.com>
 */

include_once('../lib/PhpOSRS/OSRS.php');
include_once('../lib/PhpOSRS/Account.php');
include_once('../lib/PhpOSRS/Skill.php');

//Init OSRS
$OSRS = new PhpOSRS\OSRS();

$accountName = (isset($_GET['name']) ? $_GET['name'] : "Beagon");

//Init Account and fill in the username
$account = new PhpOSRS\Account($accountName);

//Retrieve the hiscore
$account = $OSRS->retrieveHiscore($account);

//Die to show data
die(var_dump($account));
