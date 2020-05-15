<?php

namespace App\Http\Controllers;

use App\Actions\Prospect\Store as StoreAction;
use App\Prospect;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProspectController extends Controller
{
    public function store(Request $request)
    {
        /**
         * Uso un paquete (https://laravelactions.com/) para separar
         * la logica de negocios de logica que tenga que ver con la
         * interfaz por donde se recibieron los datos.Por ejemplo aqui
         * se va a dar de alta tomando los datos de una Request (lo cual
         * tiene que ver con HTTP), ¿pero que pasaria si el dia de mañana
         * tuviera que realizar conceptualmente lo mismo pero en un
         * comando de Artisan? Tendria que tomar los datos de algun otro
         * lugar seguramente (los argumentos, una conexion a una 
         * BD exogena, un excel, un archivo .csv, .json, etc ).
         * Tendria codigo repetido, lo unico que variaria seria de donde
         * leer los datos que hay que insertar en el modelo.
         * Para evitar eso uso Actions. Abstraigo la logica de negocios de
         * la logica de entrada de los datos.
         */
        $action = new StoreAction();

        /**
         * Como parametro general siempre es bueno hacer toda operacion
         * que impacte sobre BD bajo transaccion. Esto garantiza la
         * integridad de los datos si ocurre un fallo en plena transaccion
         * (o por lo menos hace que sea un problema a nivel BD y no uno
         * a nivel capa de negocios)
         */

        DB::transaction(function () use ($action, $request) {
            /**
             * A modo de simular que pasaria si ocurriria una exception
             * de algun tipo durante la transaction escribi la linea de
             * abajo. Ver App\Exceptions\Handler. Basicamente agregue
             * una pagina de error 500 customizada con el theme del
             * sitio web para que en caso de ocurrir una exception por
             * algun tema (infraestructura, bug, etc) se de algun tipo
             * de mensaje de error amigable con el usuario.
             */
            // throw new Exception("bad exception");

            $action->handle($request->all());
        });

        /**
         * Con PHP 7.4 se podria usar un arrow function para menos
         * verbosity
         */
        // DB::transaction(fn () => $action->handle($request->all()));

        /**
         * Si no ocurrio ninguna exception de ningun tipo durante 
         * la transaction, entonces la linea de abajo se ejecutara con
         * total normalidad.
         * Nota: 
         *  1 - la linea de abajo no forma parte de la funcion anonima
         *      de la transaction porque  como buena practica las
         *      transacciones deberian durar siempre la menor cantidad
         *      de tiempo posible.
         *  2 - la linea de abajo no forma parte del metodo handle() de
         *      la clase App\Actions\Prospect\Store porque disminuiria
         *      la cohesion interna de dicha clase.
         */

        return view("pages.thanks");
    }
}
