<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_log', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('log_date')->nullable();
            $table->string('log_type')->nullable();
            $table->string('log_url')->nullable();
            $table->longText('log_message')->nullable();
            $table->string('log_cat1')->nullable();
            $table->string('log_cat2')->nullable();
            $table->string('log_cat3')->nullable();
            $table->string('log_cat4')->nullable();
            $table->string('log_cat5')->nullable();
            $table->string('log_cat6')->nullable();
            $table->string('log_cat7')->nullable();
            $table->string('log_cat8')->nullable();
            $table->string('log_cat9')->nullable();
            $table->string('log_cat10')->nullable();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_log');
    }
}
