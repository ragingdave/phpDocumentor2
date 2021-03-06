<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @copyright 2010-2014 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Descriptor\Interfaces;

/**
 * Descriptor representing a constant on a class, trait, property or file.
 */
interface ConstantInterface extends BaseInterface
{
    /**
     * Sets the types that this constant may contain.
     *
     * @param array $types
     *
     * @return void
     */
    public function setTypes(array $types);

    /**
     * Returns the types that may be present in this constant.
     *
     * @return array[]
     */
    public function getTypes();

    /**
     * Sets the value representation for this constant.
     *
     * @param string $value
     *
     * @return void
     */
    public function setValue($value);

    /**
     * Retrieves a textual representation of the value in this constant.
     *
     * @return string
     */
    public function getValue();
}
