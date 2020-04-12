<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\ModelCategory;
use SebastianBergmann\Environment\Console;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    private $objCategory;

    public function __construct()
    { 
      $this->objCategory = new ModelCategory();
    }
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $category = $this->objCategory->all();
        return view('categories/category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
       $reg = $this->objCategory->create([
                                           'name'        =>$request->nameCategory,
                                           'description' =>$request->descriptionCategory
                                         ]);

        if($reg){
           return redirect('category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $category=$this->objCategory->find($id);
        return view('categories/view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {          
        $category=$this->objCategory->find($id);
        return view('categories/create', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {          
        $this->objCategory->where(['id'=>$id])->update([
            'name'        =>$request->nameCategory,
            'description' =>$request->descriptionCategory
        ]);            
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      ModelCategory::find($request->id)->delete();
      return response()->json();  
    }
    // Carregando DataTable
    public function ajax()
    {
        $categories = ModelCategory::all();
        return Datatables::of($categories)
        ->addColumn('action', function($row){
            return '<a href='.\URL("category/$row->id").' class="btn btn-sm btn-outline-dark"><i class="fa fa-search" aria-hidden="true"></i> Exibir</a>
                    <a href='.\URL("category/$row->id/edit").' class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i> Editar</a>                                                          
                    <a href="#" id="deleteCategory" data-id='.$row->id.' class="btn btn-sm btn-outline-danger"> Excluir</a>             
                    ';            
        })                         
        ->rawColumns(['action'])
        ->make(true);
    }    
}
