<?php

class Linhaobra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade'),
        array('valor'),
        array('valiva'),
        array('id_folhaobra'),
        array('id_service')
    );

    static $validates_length_of = array(
        array('quantidade', 'is' => 2),
        array('valor', 'is' => 8),
        array('valiva', 'is' => 8)
    );

    static $validates_numericality_of = array(
        array('quantidade', 'only_integer' => true),
        array('valor', 'greater_than_or_equal_to' => 0),
        array('valiva', 'greater_than_or_equal_to' => 0)
    );

    static $belongs_to = array(
        array('folhaobra'),
        array('folhaobra','class_name'=>'Folhaobra','foreign_key'=>'id_folhaobra'),
        array('service'),
        array('service','class_name'=>'Service','foreign_key'=>'id_service'),
    );
}