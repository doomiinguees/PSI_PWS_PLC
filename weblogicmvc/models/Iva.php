<?php

class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('valor'),
        array('descricao'),
        array('estado')
    );

    static $validates_length_of = array(
        array('valor', 'is' => 2),
        array('descricao', 'maximum' => 45)
    );

    static $validates_numericality_of = array(
        array('valor', 'only_integer' => true),
    );


}