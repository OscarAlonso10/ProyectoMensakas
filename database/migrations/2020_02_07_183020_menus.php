<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('business', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('idBusiness');
            $table->string('name', 45);
            $table->string('location', 45);
            $table->string('adress', 225);
            $table->string('email', 225);
            $table->integer('number')->length(9);
            $table->integer('zipcode')->length(5)->nullable();
            $table->timestamps();
        
        });


        Schema::create('business_Timetable', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('idBusiness_Timetable');
            $table->smallInteger('Day')->nullable();
            $table->time('Open')->nullable();
            $table->time('Close')->nullable();            
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('business')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('consumer', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idConsumer');
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('location', 45)->nullable();
            $table->integer('phone')->length(9);
            
        
            $table->timestamps();
        
        });

         Schema::create('language', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idlanguage');
            $table->string('nombre', 45);
            $table->string('code', 3)->nullable();
        
            $table->timestamps();
        
        });


        Schema::create('product', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idProduct');
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->boolean('state');
            $table->decimal('price', 5, 2);
            $table->string('type', 45)->nullable();
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('business')->onDelete('cascade');
            $table->unsignedBigInteger('fk_language_id');
            $table->foreign('fk_language_id')->references('idlanguage')->on('language')->onDelete('cascade');
            $table->timestamps();
        
        });

        Schema::create('business_Category', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('idBusiness_Category');
            $table->string('name', 45);
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('business')->onDelete('cascade');
            $table->unsignedBigInteger('fk_language_id');
            $table->foreign('fk_language_id')->references('idlanguage')->on('language')->onDelete('cascade');
            $table->timestamps();
        
        });

        Schema::create('product_Category', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idProduct_Category');
            $table->string('name', 45);
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('idProduct')->on('product')->onDelete('cascade');
            $table->unsignedBigInteger('fk_language_id');
            $table->foreign('fk_language_id')->references('idlanguage')->on('language')->onDelete('cascade');
            $table->timestamps();
        
        });
        

        Schema::create('deliverer', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idDeliverer');
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->integer('phone')->nullable();
            $table->string('email', 45)->nullable();

            $table->timestamps();
        
        });

         Schema::create('order', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idOrder');
            $table->string('name', 45);
            $table->string('status', 45)->nullable();
            $table->string('json');

            $table->unsignedBigInteger('fk_deliverer_id');
            $table->foreign('fk_deliverer_id')->references('idDeliverer')->on('deliverer')->onDelete('cascade');

        
            $table->timestamps();
        
        });

        Schema::create('order_message', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idOrder_message');
            $table->text('text');
            
            $table->unsignedBigInteger('fk_deliverer_id');
            $table->foreign('fk_deliverer_id')->references('idDeliverer')->on('deliverer')->onDelete('cascade');
            $table->unsignedBigInteger('fk_user_id');
            $table->foreign('fk_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('fk_order_id');
            $table->foreign('fk_order_id')->references('idOrder')->on('order')->onDelete('cascade');

        
            $table->timestamps();
        
        });

        Schema::create('deliverer_location', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idDeliverer_location');
            $table->decimal('lat',11,8);
            $table->decimal('lon',11,8);
            $table->unsignedBigInteger('fk_deliverer_id');
            $table->foreign('fk_deliverer_id')->references('idDeliverer')->on('deliverer')->onDelete('cascade');

            $table->timestamps();
        
        });

        Schema::create('deliverer_update', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idDeliverer_update');
            $table->string('text', 45)->nullable();
            
            $table->unsignedBigInteger('fk_deliverer_id');
            $table->foreign('fk_deliverer_id')->references('idDeliverer')->on('deliverer')->onDelete('cascade');
        
            $table->timestamps();
        
        });

        Schema::create('business_Category_has_Business', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('business')->onDelete('cascade');
            $table->unsignedBigInteger('fk_business_category_id');
            $table->foreign('fk_business_category_id')->references('idBusiness_Category')->on('business_Category')->onDelete('cascade');
        
            $table->timestamps();
        
        });

        Schema::create('product_has_Product_Category', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('idProduct')->on('product')->onDelete('cascade');
            $table->unsignedBigInteger('fk_product_category_id');
            $table->foreign('fk_product_category_id')->references('idProduct_Category')->on('product_Category')->onDelete('cascade');

            $table->timestamps();
        
        });

        Schema::create('extra', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idExtra');
            $table->string('name', 45);
            $table->decimal('price', 3, 2);
        
            $table->timestamps();
        
        });

        Schema::create('product_has_Extra', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('idProduct')->on('product')->onDelete('cascade');
            $table->unsignedBigInteger('fk_extra_id');
            $table->foreign('fk_extra_id')->references('idExtra')->on('extra')->onDelete('cascade');
        
            $table->timestamps();
        
        });

        Schema::create('pack', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idPack');
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->boolean('state')->nullable();
            $table->decimal('price', 5, 2)->nullable();
            
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('business')->onDelete('cascade');

            $table->timestamps();
        
        });

        Schema::create('product_has_Order', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('idProduct')->on('product')->onDelete('cascade');

            $table->unsignedBigInteger('fk_order_id');
            $table->foreign('fk_order_id')->references('idOrder')->on('order')->onDelete('cascade');
        
            $table->timestamps();
        
        });

        Schema::create('pack_has_Order', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('fk_order_id');
            $table->foreign('fk_order_id')->references('idOrder')->on('order')->onDelete('cascade');

            $table->unsignedBigInteger('fk_pack_id');
            $table->foreign('fk_pack_id')->references('idPack')->on('pack')->onDelete('cascade');
            $table->timestamps();
        
        });

        Schema::create('payment', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idPayment');
            $table->string('status', 45);
            
            $table->unsignedBigInteger('fk_order_id');
            $table->foreign('fk_order_id')->references('idOrder')->on('order')->onDelete('cascade');

            $table->unsignedBigInteger('fk_consumer_id');
            $table->foreign('fk_consumer_id')->references('idConsumer')->on('consumer')->onDelete('cascade');
        
            $table->timestamps();
        
        });

        Schema::create('bill', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('idBill');
            $table->string('token',225);
            $table->unsignedBigInteger('fk_order_id');
            $table->foreign('fk_order_id')->references('idOrder')->on('order')->onDelete('cascade');
        
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('business');
        Schema::drop('business_Timetable');
        Schema::drop('consumer');
        Schema::drop('language');
        Schema::drop('product');
        Schema::drop('business_Category');
        Schema::drop('product_Category');
        Schema::drop('deliverer');
        Schema::drop('order');
        Schema::drop('order_message');
        Schema::drop('deliverer_location');
        Schema::drop('deliverer_update');
        Schema::drop('business_Category_has_Business');
        Schema::drop('product_has_Product_Category');
        Schema::drop('extra');
        Schema::drop('product_has_Extra');
        Schema::drop('payment');
        Schema::drop('bill');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
