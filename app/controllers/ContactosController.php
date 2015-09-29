<?php
class ContactosController extends BaseController
{
    /**
     * Muestra la lista de contactos
     */
    public function listContactos()
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

        return Redirect::route('contacts.list');
    }

    /**
     * Ver detalle del contacto
     */
    public function verContacto($id)
    {
        $contacto = Contact::find($id);

        return View::make('contactos.ver', array('contacto' => $contacto));
    }

    /**
     * Modificar un contacto
     */
    public function editarContacto($id)
    {
        $contacto = Contact::find($id);
        if (is_null($contacto))
        {
            return Redirect::route('contacts.list');
        }
        return View::make('contactos.editar', compact('contacto'));

    }

    public function updateContacto($id){

        $input = Input::all();

        $contact = Contact::find($id);
        $contact->update($input);
        return Redirect::route('contacts.list');

    }

    public function deleteContacto($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return Redirect::route('contacts.list');
    }

}
