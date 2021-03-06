<?php


if(!defined('PHPUnit_MAIN_METHOD')) {
	define('PHPUnit_MAIN_METHOD', 'Data_SqlMap_DataMapper_AllTests::main');
}

require_once 'TPropertyAccessTest.php';

class Data_SqlMap_DataMapper_AllTests {

	public static function main() {
		PHPUnit_TextUI_TestRunner::run(self::suite());
	}

	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('System.Data.SqlMap.DataMapper');

		$suite->addTestSuite('TPropertyAccessTest');

		return $suite;
	}
}

if(PHPUnit_MAIN_METHOD == 'Data_SqlMap_DataMapper_AllTests::main') {
	Data_SqlMap_DataMapper_AllTests::main();
}