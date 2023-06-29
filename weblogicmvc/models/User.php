<?php

class User extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('nome'),
        array('username'),
        array('password'),
        array('email'),
        array('telefone'),
        array('nif'),
        array('morada'),
        array('localidade'),
        array('codpostal'),
        array('role')
    );


    static $validates_numericality_of = array(
        array('telefone', 'only_integer' => true),
        array('nif', 'only_integer' => true)
    );


    public static function find_by_username_and_password($username, $password) {
        return User::find('first', array(
            'conditions' => array(
                'username = ? AND password = ?',
                $username, $password
            )
        ));
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    static $has_many  = array(
        array('folhaobra')
    );
}