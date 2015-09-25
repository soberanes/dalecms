<?php
class Contact extends Eloquent
{
    protected $table = 'contactos';
    protected $fillable = array('nombre', 'apellido');
}
