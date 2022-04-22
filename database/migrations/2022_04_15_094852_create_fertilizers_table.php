<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fertilizers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('norm_nitrogen');
            $table->float('norm_phosphorus');
            $table->float('norm_potassium');
            $table->unsignedBigInteger('crops_id');
            $table->string('area');
            $table->float('price');
            $table->string('description');
            $table->string('purpose');

            $table->softDeletes();
            $table->timestamps();

            $table->index('crops_id','fertilizers_crops_idx');
            $table->foreign('crops_id','fertilizers_crops_fk')->on('crops')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fertilizers');
    }
};
