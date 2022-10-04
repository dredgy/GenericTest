<?php

/**
 * @template X
 */
class EntityModel
{
    function where(){

    }

    /**
     * @return EntityList<X>
     */
    function select(){
        return (New EntityList());
    }
}