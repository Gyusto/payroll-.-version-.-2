<?php
 
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Model\Person;
use App\Model\Client;

use Image, File;
 
class ProjectController extends Controller{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function projects(){
        $project = Project::with('createdBy')->get();
        $data = ['projects'=>$project];
        return view('pages.project.project',$data);
    }

    public function projectDetails($uuid){
        $details = Project::where('uuid',$uuid)->with('projectClient')->get();
        $data = ['details'=>$details];
        return view('pages.project.details', $data);
    }

    public function AddProject(){

    }
   public function testAPI(Request $request)
   {
     $data = [];
  
        if($request->filled('q')){
            $data = User::select("name", "id")
                        ->where('name', 'LIKE', '%'. $request->get('q'). '%')
                        ->get();
        }
    
        return response()->json($data); 
    }

//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'name' => 'required|string|max:255',
//             'images' => 'required|array'
//         ]);

//         $images = [];

//         foreach ($data['images'] as $image) {
//             $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
//             $image_path = 'uploads/' . $image_name;
//             Image::make($image)->save(public_path($image_path));
//             array_push($images, $image_path);
//         }
//         $data['images'] = $images;
//         Project::create($data);

//         return redirect()->route('projects.index');
//     }
// public function upload(Request $request) {
//         $validator = $request->validate([
//             'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         ]);

//         $files = array();
//         if($request->hasfile('images')) {
//             foreach($request->file('images') as $image) {
//                 $name = time().rand(1,100).'.'.$image->extension();
//                 if($image->move(public_path('uploads'), $name)) {
//                     $files[] = $name;
//                     $upload_status = Image::create(["imageName" => $name]);
//                 }
//             }
//          }

//          if($upload_status) {
//             return back()->with('success', 'Success! images uploaded');
//          }

//          else {
//              return back()->with('failed', 'Alert! images not uploaded');
//          }
//     }
}
