<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\Rooms;
use App\reviews;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Models\Hotels;

class HotelsController extends Controller {
	/**
	 * createe a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function getListhotels() {
        $Locations = Locations::all();
		$Hotels=Hotels::with('location')->paginate(5);
		return view( 'admin.hotels.list',['Hotels'=>$Hotels,'Locations' => $Locations] );
	}

	public function getcreate() {
		$locations = Locations::pluck( 'name', 'id' );

		return view( 'admin.hotels.create', compact( 'locations' ) );
	}

	/**
	 * @param Request $
	 */
	public function store( Request $request ) {
		$this->validate($request,[
			'name'=>'required|unique:Hotels,name|min:3|max:100',
			'info.address'=>'required',
		]);
        $request->merge(['slug'=>changeTitle($request->name)]);
		if ( Hotels::create( $request->all() ) ) {
			return redirect()->route( 'admin.hotels.list' );

		} else {
			return redirect()->route( 'admin.hotels.create' );
		}
	}
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getEdit( $id ) {
		$hotels = Hotels::find( $id );
		$location=Locations::all();
		return view( 'admin.hotels.edit', [ 'hotels' => $hotels,'location'=>$location] );
	}
	/**
	 * @param Request $request
	 * @param $id
	 */
	public function postEdit( Request $request, $id ) {
		/*dd($request->all());*/
		$hotel = Hotels::findOrFail($id);

		$this->validate( $request,
			[
				'name' => 'required|min:3|max:100'
			],
			[
				'name.required' => 'You have not entered a name yet',
				'name.unique'   => 'The name already exists',
				'name.min'      => 'The length must be between 3 and 100 characters',
				'name.max'      => 'The length must be between 3 and 100 characters'
			]
		);
        $request->merge(['slug' => changeTitle($request->name)]);
		$hotel->update($request->all());
		return redirect( '/admin/hotels/edit/' . $id )->with( 'notification', 'Edit successfully' );
	}

	public function getdelete( $id ) {
		$hotels = Hotels::find( $id );
		$hotels->delete();

		return redirect( '/admin/hotels/list/' )->with( 'messagedelete', 'Delete successfully' );
	}
}
