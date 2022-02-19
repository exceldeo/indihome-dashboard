<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'DESC')->get();
        // dd($beritas);
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required|max:255',
            'content' => 'required',
            'img_header' => 'required|max:20000',
        ]);

        $path = Storage::putFile(
            'public/images',
            $request->file('img_header')
        );
        $slug = str_replace(' ', '-', strtolower($request->input('header')));
        $berita = Berita::create([
            'imgHeader' => $path,
            'header' => $request->input('header'),
            'content' => $request->input('content'),
            'idAdmin' => Auth::user()->id,
            'slug' => $slug,
        ]);

        $berita->save();

        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil ditambahkan');
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
        $berita = Berita::find($id);
        return view('Admin.berita.edit', compact('berita'));
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
        $request->validate([
            'header' => 'required',
            'content' => 'required',
        ]);

        $berita = Berita::find($id);

        $berita->header = $request->input('header');
        $berita->content = $request->input('content');
        $berita->slug = str_replace(' ', '-', strtolower($request->input('header')));

        if ($request->img_header != null) {
            $request->validate([
                'img_header' => 'required|max:20000',
            ]);

            $path = Storage::putFile(
                'public/images',
                $request->file('img_header')
            );

            $berita->imgHeader = $path;
        }

        $berita->save();

        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = null;
        Berita::where('id', $id)->delete();
        $message = 'Berita berhasil dihapus!';
            
        return redirect()->route('admin.berita.index')->with('message', $message);
    }
}
