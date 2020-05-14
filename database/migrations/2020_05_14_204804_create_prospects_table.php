<?php

use App\Prospect;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Ya que me pasaron por mail la DDL de la tabla, por ahi
         * podria usar lo siguiente para ahorrar trabajo. Sin embargo
         * no lo haria de esta forma porque una de las ventaja de usar
         * migrations (y no scripts de mysqldump) es justamente ser un
         * tanto agnosticos al motor que se este usando. Puede que esto
         * no siempre se cumpla, especialmente en versiones viejas de 
         * Laravel, pero bueno esa es la idea.
         */
        // DB::statement("CREATE TABLE IF NOT EXISTS `prospects` (
        //     `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        //     `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        //     `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        //     `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        //     `created_at` timestamp NULL DEFAULT NULL,
        //     `updated_at` timestamp NULL DEFAULT NULL,
        //     PRIMARY KEY (`id`)
        //   ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

        /**
         * Alternativamente, con Blueprint algo equivalente seria
         * lo siguiente.
         */
        Schema::create(Prospect::TABLE_NAME, function (Blueprint $table) {

            /**
             * Por causa de como funciona Blueprint no es posible 
             * indicar EXACTAMENTE una longitud de 10 (aunque lo
             * equivalente seria usar increments()), pero si es posible
             * usar alguna de las multiples variantes (increments, 
             * bigIncrements, etc). 
             */
            $table->increments('id');

            $table->string('name', 255);
            $table->string('lastname', 255);
            $table->string('email', 255);

            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
        /**
         * Por ahi lo de hacer que ID tenga longitud de exactamente 10 
         * podria abordarse de la siguiente forma.
         */
        // DB::statement('ALTER TABLE ' . Prospect::TABLE_NAME . ' MODIFY id int(10) unsigned NOT NULL AUTO_INCREMENT');

        /**
         * Por ultimo el AUTO_INCREMENT a partir de 2 no tengo otra
         * opcion que especificarlo por medio de un ALTER TABLE. La
         * otra manera seria instalar el paquete doctrine/dbal,
         * hacer otra migration pura y exclusivamente para setear este
         * valor, lo cual me parece que seria demasiado.
         */
        DB::statement('ALTER TABLE ' . Prospect::TABLE_NAME . ' AUTO_INCREMENT = 2;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Prospect::TABLE_NAME);
    }
}
