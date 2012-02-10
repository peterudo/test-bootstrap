<?php
/**
 * Page level docblock
 *
 * @package Bootstrap
 * @author Peter Rudolfsen
 */

namespace Lib;

/**
 * MyClass
 *
 * @package Bootstrap
 **/
class MyClass {

    /**
     *class variable
     *
     * @var string
     **/
    private $var;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Set var
     *
     * @param string $var
     * @return void
     */
    public function setVar($var) {
        $this->var = $var;
    }

    /**
     * Get var
     *
     * @return string
     */
    public function getVar() {
        return $this->var;
    }

}
