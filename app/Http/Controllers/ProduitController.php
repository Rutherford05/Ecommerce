<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Myprod;
use Redirect;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
class ProduitController extends Controller
{
    public function index()
    {
        $data = Myprod::latest()->paginate(5);
        return view('produits.prod', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('produits.create');
    }
    public function search(Request $request){
        $search=$request->get('search');
        $data=DB::table('myprods')->where('designation_prod','like','%'.$search.'%')->paginate(3);
        return view('produits.prod',['data'=>$data]);
             
    }
    public function store(Request $request)
    {
        $this->validate($request, [
                'designation_prod'    =>  'required|',
                'prix'    =>  'required|',
                'quantite'    =>  'required|',
                'image_prod'         =>  'image|max:2048'
        ]);
        $image = $request->file('image_prod');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $input_data = array(
            'designation_prod'       =>   $request->designation_prod,
            'prix'       =>   $request->prix,
            'quantite'       =>   $request->quantite,
            'image_prod'            =>   $new_name
        );
        Myprod::create($input_data);
        return redirect('mes_articles')->with('Success', 'La catégorie a été ajoutée avec succès');
    }
    
    public function edit($id)
    {
        $data = Myprod::findOrFail($id);
        return view('edit', compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data=Myprod::findOrFail($id); 
        $image_name = $request->hidden_image;
        $image = $request->file('image_prod');
        if($request->hasFile('image_prod'))
        {
            $file = $request->file('image_prod');
            $name =$image->getClientOriginalName();
            $data->image = $name;
            $this->validate($request, [
                'designation_prod'    =>  'required|',
                'prix'    =>  'required|',
                'quantite'    =>  'required|',
                'image_prod' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $file->move(public_path('images'), $name);
           
        }
        else 
        {
            $this->validate($request, [
                'designation_prod'    =>  'required|',
                'prix'    =>  'required|',
                'quantite'    =>  'required|',
                
            ]);

        }
             $data->designation_prod= $request['designation_prod'];
             $data->prix = $request['prix'];
             $data->quantite= $request['quantite'];
             $data->save();
        return redirect('mes_articles')->with('Success', 'Le produit a été modifié avec succes');
    }
    
    public function destroy($id) 
    {
        $data = Myprod::findOrFail($id);
        $data->delete();
        return redirect('mes_articles')->with('error', 'Le produit a été supprimé avec success');
    }
}
