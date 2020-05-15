<?php

namespace App\Actions\Prospect;

use App\Mail\Prospect as ProspectMail;
use App\Prospect;
use Illuminate\Support\Facades\Mail;
use Lorisleiva\Actions\Action;

class Store extends Action
{
    /**
     * Determine if the user is authorized to make this action.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the action.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * Execute the action and return a result.
     *
     * @return Prospect
     */
    public function handle(array $data): Prospect
    {
        $prospect = Prospect::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            /**
             * Es bueno dejar una coma aun despues del ultimo element
             * del array, aun cuando sintacticamente es irrelevante.
             * La razon para esto es que si surge la necesidad de
             * agregar mas elementos en un commit posterior, la linea
             * no contara como una linea modificada.
             */
            'email' => $data['email'],
        ]);

        /**
         * Convenientemente Prospect tiene la propiedad email y name,
         * que Laravel leera automaticamente para enviar el mail.
         */
        Mail::to($prospect->email)
            /**
             * En general es bueno procesar el envio de emails de forma
             * asincrona para no extender el tiempo necesario en retornar
             * alguna informacion al usuario en su navegador. La forma de
             * hacer esto es via Queue.
             */
            ->queue(new ProspectMail($prospect));

        return $prospect;
    }
}
