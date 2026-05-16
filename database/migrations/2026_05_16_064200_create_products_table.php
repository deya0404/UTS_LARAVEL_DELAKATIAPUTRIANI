public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->integer('harga');
        $table->timestamps();
    });
}