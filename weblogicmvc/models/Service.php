<?php

class Service extends \ActiveRecord\Model
{

    static $belongs_to = array(
        array('iva')
    );
}