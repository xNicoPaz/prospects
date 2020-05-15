<?php

namespace App\Http\Requests\Prospect;

use App\Prospect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255',],
            'lastname' => ['required', 'string', 'max:255',],
            'email' => [
                'required',
                'email:rfc,dns',
                /**
             * Aunque podria validar que no este ya registrado el
             * email y aun desde aqui mismo hacer la redireccion
             * a la vista que dice que ya esta registrado (usando
             * los metodos withValidator() y after()) considero que
             * eso romperia la cohesion del Request, ya que su unico
             * proposito es validar datos de entrada. Si yo tuviese
             * aqui adentro una sentencia que retornara una vista al
             * usuario eso romperia la cohesion porque eso tiene que
             * ver con la informacion de salida, y no con los datos
             * de entrada. La Request no tendria un unico proposito
             * y a la larga desarrollar codigo de esa manera disminuye
             * la mantenibilidad del sistema.
             */
                // Rule::notIn(
                //     Prospect
                //         ::select('email')
                //         ->get()
                //         ->pluck('email')
                // ),
            ],
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Este campo es requerido',
            '*.max' => 'Este campo no puede tener mas de 255 caracteres',
            'email.email' => 'El mail debe ser una direccion valida',
            // 'email.not_in' => 'El email ya se encuentra registrado',
        ];
    }
}
