<?php

namespace App\Http\Controllers;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaLibraryController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //$this->middleware(['auth', 'verified']);
  }

  /**
   * Get Media Library page
   * @return View
   */
 public function mediaLibrary(Request $request){
   
    $media_obj=$user_obj=$data=array(); 
	
	$media_obj=json_encode(array('name'=>'a','mime'=>'a','url'=>''));
	
    return view('medialibrary',$media_obj);
  }
}