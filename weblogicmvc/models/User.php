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

    static $validates_length_of = array(
        array('nome', 'maximum' => 45),
        array('username', 'maximum' => 20),
        array('password', 'maximum' => 25),
        array('email', 'maximum' => 30),
        array('telefone', 'is' => 9),
        array('nif', 'is' => 9),
        array('morada', 'maximum' => 45),
        array('localidade', 'maximum' => 15),
        array('codpostal', 'is' => 8),
        array('role', 'maximum' => 45)
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