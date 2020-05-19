<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_title',500);
            $table->string('event_desc',2000)->nullable();
            $table->string('event_presenter_name',500);
            $table->string('event_image',500);
            $table->string('event_presenter_designation',500)->nullable();
            $table->string('event_presenter_org_details',500)->nullable();
            $table->date('event_date');
            $table->time('event_time');
            $table->string('event_duration',100)->nullable();
            $table->string('event_meeting_link',500)->nullable();
            $table->string('event_meeting_id',500)->nullable();
            $table->string('event_meeting_password',500)->nullable();
            $table->integer('event_status');
            $table->integer('event_category')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_configs');
    }
}
