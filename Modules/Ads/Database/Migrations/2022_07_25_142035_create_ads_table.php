<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Ads\Models\Ads;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {

            $table->id();
            $table->string('title', 100);
            $table->string('description')->nullable();
            $table->enum('type', Ads::AD_TYPES)->nullable();

            $table->unsignedBigInteger('advertiser_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->json('tags')->nullable();

            $table->foreign('advertiser_id')
                ->references('id')
                ->on('advertisers')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestamp('start_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
};
