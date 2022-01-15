<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebtorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debtor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('debtor_name')->comment('債務者氏名');
            $table->string('debtor_postal_code')->comment('債務者の郵便番号');
            $table->string('debtor_prefecture')->comment('債務者の都道府県');
            $table->string('debtor_city')->comment('債務者の市区町村');
            $table->string('debtor_town')->comment('債務者の町名番地等');
            $table->string('debtor_building')->nullable()->comment('債務者の建物等');
            $table->string('debtor_phone_number')->comment('債務者の電話番号');
            $table->string('billing_amount')->comment('請求金額');
            $table->string('annual_interest')->comment('年間利息');
            $table->string('revenue_stamp_fee')->comment('収入印紙代');
            $table->string('credential_fee')->comment('資格証明手数料');
            $table->string('submission fee')->nullable()->comment('提出費用');
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
        Schema::dropIfExists('debtor');
    }
}
