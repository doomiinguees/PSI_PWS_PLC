<?php

class Linhaobra extends \ActiveRecord\Model
{

    static $belongs_to = array(
        array('folhaobra'),
        array('folhaobra','class_name'=>'Folhaobra','foreign_key'=>'id_folhaobra'),
        array('service'),
        array('service','class_name'=>'Service','foreign_key'=>'id_service'),
    );
}