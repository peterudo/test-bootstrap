<?php
namespace Lib\Unit;

use Lib\MyClass;

require_once __DIR__ . '/../../../library/Lib/MyClass.php';

class MyClassTest extends \PHPUnit_Framework_TestCase {

    private $myClass;

    public function setUp() {
        $this->myClass = new MyClass();
    }

    public function tearDown() {
        $this->myClass = null;
    }

    public function testSetAndGetVar() {
        $var = 'content';
        $this->myClass->setVar($var);

        $this->assertSame($var, $this->myClass->getVar());
    }

}
