<?php namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

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

        if( $request->input('insertPassword') == '0619' ) {

            $fileName   = $request->file('photo')->getClientOriginalName();
            $uploadPath = public_path('img/photo/');

            if(!file_exists($uploadPath))   mkdir( $uploadPath, 0777 );

            $request->file('photo')->move( $uploadPath, $fileName );

            $photo = new Photo;

            $photo->title       = $request->input('title');
            $photo->desc        = $request->input('desc');
            $photo->file_path   = $fileName;

            if ($photo->save()) return redirect('/');
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
	public function destroy(Request $request, $id)
	{

        if($request->input('deletePassword') == '0619') {

            $photo = Photo::find($id);

            @unlink( public_path('img/photo/') . $photo->file_path );

            if ($photo->delete())   echo 'true';
            else                    echo 'fail';

        }else{

            echo 'denied';

        }

	}

}
