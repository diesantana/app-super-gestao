<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('preco_venda');
            $table->dropColumn('estoque_min');
            $table->dropColumn('estoque_max');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_min')->default(1);
            $table->integer('estoque_max');
        });
    }
};
