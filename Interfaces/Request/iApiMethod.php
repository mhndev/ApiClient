<?php
namespace Poirot\ApiClient\Interfaces\Request;

/**
 * Api Method Then Build Via Platform And Turn To Expression
 * That Can Send Via Connection Exec Method.
 *
 * @see iConnection::exec
 */
interface iApiMethod
{
    /**
     * Set Namespaces prefix
     *
     * - it will replace current namespaces
     * - use empty array to clear namespaces prefix
     *
     * @param array $namespace Namespaces
     *
     * @return $this
     */
    function setNamespace(array $namespace);

    /**
     * Get Namespace
     *
     * @return array
     */
    function getNamespace();

    /**
     * Set Method Name
     *
     * @param string $method Method Name
     *
     * @return $this
     */
    function setMethod($method);

    /**
     * Get Method Name
     *
     * @return string
     */


    function getMethod();

    /**
     * Set Method Arguments
     *
     * - it will replace current arguments
     * - use empty array to clear arguments
     *
     * @param array $args Arguments
     *
     * @return $this
     */
     function setArguments(array $args);

    /**
     * Get Method Arguments
     *
     * - we can define default arguments with some
     *   values
     *
     * @return array
     */
    function getArguments();
}
