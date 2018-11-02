<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
  /**

   * Show the application dashboard.

   *

   * @return \Illuminate\Http\Response

   */

  public function fileUpload()

  {

    return view('fileUpload');

  }



  /**

   * Show the application dashboard.

   *

   * @return \Illuminate\Http\Response

   */

  public function fileUploadPost(Request $request)

  {

      $request->validate([

          'file' => 'required',

  ]);



      $fileName = time().'.'.request()->file->getClientOriginalExtension();



      request()->file->ove(public_path(). '/',$filename);



      return response()->json(['success'=>'You have successfully upload file.']);

  }
}
