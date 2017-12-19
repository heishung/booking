<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hotel extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'locations', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->text( 'content' )->nullable();
			$table->json( 'data' )->nullable();
			$table->timestamps();
		} );
		//
		Schema::create( 'hotels', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->json( 'info' )->nullable();
			$table->json( 'overview' )->nullable();
			$table->float( 'price_from' )->default( 0 );
			$table->unsignedInteger( 'location_id' )->nullable();

			$table->foreign( 'location_id' )
			      ->references( 'id' )
			      ->on( 'locations' );
		} );
		Schema::create( 'rooms', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->json( 'info' )->nullable();
			$table->integer( 'max_adults' );
			$table->integer( 'max_child' )->nullable();
			$table->json( 'overview' )->nullable();
			$table->float( 'price' );
			$table->float( 'single_sup' )->nullable();
			$table->boolean( 'is_book' )->default( false );
			$table->unsignedInteger( 'hotels_id' );

			$table->foreign( 'hotels_id' )
			      ->references( 'id' )
			      ->on( 'hotels' );
		} );

		Schema::create( 'reviews', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->unsignedInteger( 'hotel_id' );
			$table->unsignedInteger( 'user_id' )->nullable();
			$table->string( 'email' )->nullable();
			$table->string( 'name' )->default( 'default' );
			$table->json( 'data' );

			$table->foreign( 'hotel_id' )->references( 'id' )->on( 'hotels' );
			$table->foreign( 'user_id' )->references( 'id' )->on( 'users' );
		} );


		Schema::create( 'booking', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'full_name' );
			$table->string( 'address' );
			$table->integer( 'phone' );
			$table->unsignedInteger( 'room_id' );
			$table->integer( 'adults' );
			$table->integer( 'child' );
			$table->integer( 'infant' );
			$table->string( 'email' );
			$table->timestamps();
			$table->foreign( 'room_id' )->references( 'id' )->on( 'rooms' );
		} );


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {

		Schema::disableForeignKeyConstraints();
		//
		Schema::dropIfExists( 'ratings'/*,'hotels','rooms','location','booking'*/ );
		Schema::dropIfExists( 'hotels'/*,,'rooms','location','booking'*/ );
		Schema::dropIfExists( 'rooms'/*,,'rooms','location','booking'*/ );
		Schema::dropIfExists( 'location'/*,,'rooms','location','booking'*/ );
		Schema::dropIfExists( 'booking'/*,,'rooms','location','booking'*/ );
		Schema::dropIfExists( 'post'/*,,'rooms','location','booking'*/ );
	}
}
