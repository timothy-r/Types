<?php namespace Ace\Types;

/**
* The interface for all Types
* Instead of print UtilClass::boolize($my_variable);
* print new Boolean($my_variable) . "";
*/
interface TypeInterface
{
    /**
    * @return string the stringified version of the Type
    */
    public function __toString();
    
    /**
    * @return mixed a variable of the implementing Type
    */
    public function value();
}
