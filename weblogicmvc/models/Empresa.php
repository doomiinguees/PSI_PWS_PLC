<?php

class Empresa extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('name'),
        array('designacao'),
        array('email'),
        array('telefone'),
        array('nif'),
        array('morada'),
        array('localidade'),
        array('codPostal'),
        array('capSocial')
    );

    static $validates_length_of = array(
        array('name', 'maximum' => 15),
        array('designacao', 'maximum' => 45),
        array('email', 'maximum' => 25),
        array('telefone', 'is' => 9),
        array('nif', 'is' => 9),
        array('morada', 'maximum' => 45),
        array('localidade', 'maximum' => 15),
        array('codPostal', 'is' => 8)
    );

    static $validates_numericality_of = array(
        array('telefone', 'only_integer' => true),
        array('nif', 'only_integer' => true),
        array('capSocial', 'greater_than_or_equal_to' => 0)
    );

    static $has_many = array(
        array('folhaobra')
    );
}