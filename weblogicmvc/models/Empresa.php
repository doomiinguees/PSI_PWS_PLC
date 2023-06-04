<?php

class Empresa extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('name'),
        array('nif', 'message' => 'It must be provided')
    );
}