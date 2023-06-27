<?php

class Folhaobra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('data'),
        array('total'),
        array('ivatotal'),
        array('estado'),
        array('id_cliente'),
        array('id_funcionario'),
        array('id_empresa')
    );

    static $validates_length_of = array(
        array('estado', 'maximum' => 15)
    );

    static $validates_numericality_of = array(
        array('total', 'greater_than_or_equal_to' => 0),
        array('ivatotal', 'greater_than_or_equal_to' => 0)
    );

    static $belongs_to = array(
        array('cliente','class_name'=>'User','foreign_key'=>'id_cliente'),
        array('funcionario','class_name'=>'User','foreign_key'=>'id_funcionario'),
        array('empresa', 'class_name'=>'Empresa', 'foreign_key'=>'id_empresa')
    );

    static $has_many = array(
        array('linhaobras')
    );
}