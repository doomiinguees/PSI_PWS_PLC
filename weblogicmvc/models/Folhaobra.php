<?php

class Folhaobra extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('user'),
        array('cliente','class_name'=>'User','foreign_key'=>'id_cliente'),
        array('funcionario','class_name'=>'User','foreign_key'=>'id_funcionario')
    );

    static $has_many = array(
        array('linhaobra')
    );
}