<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Photo;

use Illuminate\Http\Request;

class PhotoController extends Controller {

    public function photo_upload_page(){

        return view('photo_upload');

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$photoList = Photo::all();

        return json_encode( $photoList );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        $fileName   = $request->file('photo')->getClientOriginalName();
        $uploadPath = public_path() . '/img/photo';

        if(!file_exists($uploadPath))   mkdir( $uploadPath, 0777 );

        $request->file('photo')->move( $uploadPath, $fileName );

        if( $request->input('insertPassword') == '0619' ) {

            $photo = new Photo;

            $photo->title       = $request->input('title');
            $photo->desc        = $request->input('desc');
            $photo->file_path   = $fileName;

            if ($photo->save()) return "ok";
            else                return "fail";

        }else{

            return "denied";

        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
