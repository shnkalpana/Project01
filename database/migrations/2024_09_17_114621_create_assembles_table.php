<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssemblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assembles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('partid')->constrained('parts')->onDelete('cascade');
            $table->integer('qty');
            $table->float('price')->default(0.00);
            $table->float('weight')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assembles');
    }
}
