<?php


namespace App\Http\Controllers;

use App\Bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;


class BarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bars = DB::table('bars')->get();

        return view('bar-showroom.index', [
            'bars' => $bars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'description' => 'required',
                'picture' => 'required',
            ],
            [
                'title.required' => 'un titre est requis.',
                'description.required' => 'un déscriptif est requis.',
                'picture.required' => 'Votre article doit contenir une image',

            ]);


        $barPicture = $request->file('picture');
        $extension = Input::file('picture')->getClientOriginalExtension();
        $filename = rand(1111111, 9999999) . '.' . $extension;
        Image::make($barPicture)->resize(600, 300)->save(public_path('/uploads/bars_pictures/' . $filename));


        $bar = new Bar();
        $input = $request->input();
        $input['picture'] = $filename;

        $bar->fill($input)->save();

        return redirect('bar')->with('success', 'Votre bar a bien été enregistré');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
