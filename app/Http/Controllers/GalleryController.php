<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\Gallery;
use Intervention\Image\Facades\Image;
use DB;
use App\Eloq\Transaction;
USE App\Slider;

class GalleryController extends Controller
{

    PUBLIC FUNCTION INDEX()
{
  $SLIDERS = Slider::ALL();
  RETURN VIEW('gallery.slidedemo', COMPACT('SLIDERS'));
}

    public function galleryListPage() {
        $row_per_page = 15;
        $GalleryPaginate = Gallery::OrderBy('id', 'desc')
            ->where('display', 'Y') //only capture the one with display status Y
            ->paginate($row_per_page);
    //set photo url
    foreach ($GalleryPaginate as &$Gallery) {
        if (!is_null($Gallery->photo)) {
            $Gallery->photo = url($Gallery->photo);
        }
    }

    $binding = [
        'title' => 'Gallery List',
        'GalleryPaginate'=> $GalleryPaginate,
        
    ];
    return view ('gallery.listGallery', $binding);
   }

   public function galleryCreateProcess() {

    //create basic info
       $gallery_data = [
            'display' => 'N',
            'caption' => '',
            'photo' => null,
       ];
    $Gallery = Gallery::create($gallery_data);

    // redirect to gallery editor
    return redirect('/gallery/'. $Gallery->id . '/edit');

   }

   public function galleryItemPage($gallery_id) {
    $Gallery = Gallery::findOrFail($gallery_id);

    if (!is_null($Gallery->photo)) {
        $Gallery->photo = url($Gallery->photo);
    }

    $binding = [
         'title' => $Gallery->name,
         'Gallery' => $Gallery,
         
    ];
    return view('gallery.showGallery', $binding);
}

   public function galleryItemEditPage($gallery_id) {
       $Gallery = Gallery::findOrFail($gallery_id);

       if (!is_null($Gallery->photo)) {
           $Gallery->photo = url($Gallery->photo);
       }

       $binding = [
            'title' => 'Gallery Edit',
            'Gallery' => $Gallery,
            
       ];
       return view('gallery.editGallery', $binding);
   }
   
   public function galleryItemUpdateProcess($gallery_id) {
    $Gallery = Gallery::findOrFail($gallery_id);
    $input = request()->all();
    
        $rules = [
        'display' => ['required', 'in:Y,N'],
        'photo' => ['file', 'image'],  //, 'max: 8192000'
        ];
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/gallery/'. $Gallery->id . '/edit')->withErrors($validator)->withInput();
        }
        if (isset($input['photo'])) {
            $photo = $input['photo'];
            $file_extension = $photo->getClientOriginalExtension(); 
            $file_name = date('Y-m-d-H-i-s') . '.' . $file_extension;
            $file_relative_path = 'images\gallery'.'\\' . $file_name;
            $file_path = public_path($file_relative_path);
            $image = Image::make($photo) -> save($file_path);
            $input['photo'] = $file_relative_path;
            }
        $Gallery->update($input);
        echo "Gallery updated";
        header("refresh:3");
        return redirect('/gallery/manage');
    }

    public function galleryManageListProcess() {
        $row_per_page = 10;
        $GalleryPaginate = Gallery::OrderBy('updated_at', 'desc')
            ->paginate($row_per_page);

    //set photo url
    foreach ($GalleryPaginate as &$Gallery) {
        if (!is_null($Gallery->photo)) {
            $Gallery->photo = url($Gallery->photo);
        }
    }

    $binding = [
        'title' => 'Gallery List',
        'GalleryPaginate'=> $GalleryPaginate,
        
    ];
    return view ('gallery.manageGallery', $binding);
    }
}