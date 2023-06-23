<?php

class User extends \ActiveRecord\Model
{
    /*static $validates_presence_of = array(
        //validacao de dados
    );*/

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