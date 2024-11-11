<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPartidAndSupplieridToBomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boms', function (Blueprint $table) {
            // Adding foreign key for partid
            $table->foreignId('partid')->constrained('parts')->onDelete('cascade');

            // Adding foreign key for supplierid
            $table->foreignId('supplierid')->constrained('suppliers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boms', function (Blueprint $table) {
            $table->dropForeign(['partid']); // Drop the foreign key constraint for partid
            $table->dropColumn('partid'); // Drop the actual column

            $table->dropForeign(['supplierid']); // Drop the foreign key constraint for supplierid
            $table->dropColumn('supplierid'); // Drop the actual column

        });
    }
}
