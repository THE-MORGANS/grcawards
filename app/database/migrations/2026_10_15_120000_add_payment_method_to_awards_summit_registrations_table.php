<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentMethodToAwardsSummitRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awards_summit_registrations', function (Blueprint $table) {
            $table->string('payment_method')->default('stripe')->after('payment_status');
            $table->string('paypal_order_id')->nullable()->after('stripe_session_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('awards_summit_registrations', function (Blueprint $table) {
            $table->dropColumn(['payment_method', 'paypal_order_id']);
        });
    }
}
