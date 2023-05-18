<?php

use App\Models\Categoria;
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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable(false)->unique();
            $table->string('descripcion', 15000)->nullable(true);
            $table->unsignedBigInteger('categoria_id');
            $table->string('marca', 100)->nullable(true);
            $table->float('precio_compra', 11, 2, true)->nullable(false);
            $table->float('precio_venta', 11, 2, true)->nullable(false);
            $table->float('margen', 4, 2, true)->nullable(false);
            $table->float('incremento', 8, 2, true)->nullable(false);
            $table->float('cantidad_stock', 7, 2, true)->nullable(false);
            $table->float('stock_minimo', 7, 2, true)->nullable(false);
            $table->timestamps();

            $table
                    ->foreign('categoria_id')
                    ->references('id')
                    ->on('categorias')
                    ->after('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
