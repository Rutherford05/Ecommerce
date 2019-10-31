<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mycat;
use Redirect;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
class CategorieController extends Controller
{
    public function index()
    {
        $data = Mycat::latest()->paginate(5);
        return view('categories.crud', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('create');
    }
    public function search(Request $request){
        $search=$request->get('search');
        $data=DB::table('mycats')->where('designation_cat','like','%'.$search.'%')->paginate(3);
        return view('categories.crud',['data'=>$data]);
             
    }
    public function store(Request $request)
    {
        $this->validate($request, [
                'designation_cat'    =>  'required|',
                'image'         =>  'image|max:2048'
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $input_data = array(
            'designation_cat'       =>   $request->designation_cat,
            'image'            =>   $new_name
        );
        Mycat::create($input_data);
        return redirect('mes_articles')->with('Success', 'La catégorie a été ajoutée avec succès');
    }
    
    public function edit($id)
    {
        $data = Mycat::findOrFail($id);
        return view('categories.edit', compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data=Mycat::findOrFail($id); 
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name =$image->getClientOriginalName();
            $data->image = $name;
            $this->validate($request, [
                'designation_cat'    =>  'required|',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $file->move(public_path('images'), $name);
           
        }
        else 
        {
            $this->validate($request, [
                'designation_cat'    =>  'required|',
                
            ]);

        }
             $data->designation_cat= $request['designation_cat'];
             $data->save();
        return redirect('mes_articles')->with('Success', 'Modification réussie');
    }
    
    public function destroy($id) 
    {
        $data = Mycat::findOrFail($id);
        $data->delete();
        return redirect('mes_articles')->with('error', 'Suppression de categorie réussie');
    }
}
