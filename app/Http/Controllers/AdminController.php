<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Comunity;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Admin Page';
        $package=new Packages;
        if(isset($_GET['s'])){
            $s=$_GET['s'];
            $package=$package->where('package_name', 'like', '%$s%');
        }
        if(isset($_GET['comunity_id'])&&$_GET['comunity_id']!=''){
            $package=$package->where('comunity_id', $_GET['comunity_id']);
        }
        $package=$package->paginate(5);
        $comunities=Comunity::all();

        return view('backpage.admin', compact('title', 'package', 'comunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Create Page';
        $comunities=Comunity::all();
        return view('backpage.inputadmin', compact('title', 'comunities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=>'Atribute must filled',
            'file'=>'File exceed the size'
        ];
        $validasi=$request->validate([
            'package_name'=>'required',
            'package_code'=>'required',
            'package_desc'=>'',
            'comunity_id'=>'required',
            'feature_img'=>'required|mimes;png,jpg|max:1024'
        ], $messages);
        try {
            $fileName = time().$request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('imgs', $fileName);
            $validasi['feature_img']=$path;
            $response = Packages::create($request->$validasi);
            return view('backpage.admin');
        } catch (\Exception $e) {
            echo $e->getMessage();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Create Page';
        $comunities=Comunity::all();
        $package=Packages::where('package_id', $id)->first();
        return view('backpage.inputadmin', compact('title', 'comunities', 'package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required'=>'Atribute must filled',
            'file'=>'File exceed the size'
        ];
        $validasi=$request->validate([
            'package_name'=>'required',
            'package_code'=>'required',
            'package_desc'=>'',
            'comunity_id'=>'required',
            'feature_img'=>''
        ], $messages);
        try {
            if($request->file('feature_img')){
                $fileName = time().$request->file('feature_img')->getClientOriginalName();
                $path = $request->file('feature_img')->storeAs('imgs', $fileName);
                $validasi['feature_img']=$path;
            };
            $response = Packages::find($id)->create($validasi);
            return redirect('admin');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $package=Packages::where('package_id',$id);
            $package->delete();
            return redirect('admin');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
