<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('landing_id');
            $table->string('type');
            $table->string('title');
            $table->integer('order');
            $table->boolean('state')->default(\App\Models\Block::STATE_SHOW);
            $table->jsonb('content')->nullable();
            $table->timestamps();

            $table->foreign('landing_id')
                ->on('landings')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
