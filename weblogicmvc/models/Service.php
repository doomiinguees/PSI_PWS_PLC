<?php

class Service extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('nome'),
        array('referencia'),
        array('precoHora'),
        array('iva_id')
    );

    static $validates_length_of = array(
        array('nome', 'maximum' => 150),
        array('referencia', 'maximum' => 20),
        array('precoHora', 'is' => 8)
    );

    static $validates_numericality_of = array(
        array('precoHora', 'greater_than_or_equal_to' => 0)
    );


    static $belongs_to = array(
        array('iva')
    );
}