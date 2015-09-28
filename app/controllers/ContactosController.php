<?php
class ContactosController extends BaseController
{
    /**
     * Muestra la lista de contactos
     */
    public function mostrarContactos()
    {
        $contactos = Contact::all();

        return View::make('contactos.lista', array('contactos' => $contactos));

    }

    /**
     * Muestra formulario para crear un Contacto
     */
    public function nuevoContacto()
    {
        return View::make('contactos.crear');
    }

    /**
     * Crear el contacto nuevo
     */
    public function crearContacto()
    {
        Contact::create(Input::all());

        return Redirect::to('admin');
    }

    /**
     * Ver detalle del contacto
     */
    public function verContacto($id)
    {
        $contacto = Contact::find($id);

        return View::make('contactos.ver', array('contacto' => $contacto));
    }

}
