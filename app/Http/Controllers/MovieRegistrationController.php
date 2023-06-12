<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Biodata;
use App\Models\MovieRegistration;
use DB;

class MovieRegistrationController extends Controller
{
    public static $pageTitle = 'Movie Registration';
    
    public function index ()
    {
        $pageTitle = self::$pageTitle;
        $Movie = MovieRegistration::all();
        return view ('MovieRegistration.index', compact('pageTitle', 'Movie'));
    }
    
    public function store(Request $request)
    {
        $pageTitle = self::$pageTitle;
        $Biodata = new Biodata;
        $Biodata->nama_lengkap    = $request->nama_lengkap;
        $Biodata->no_identitas    = $request->no_identitas;
        $Biodata->tempat_lahir    = $request->tempat_lahir;
        $Biodata->tgl_lahir       = $request->tgl_lahir;
        $Biodata->no_hp           = $request->no_hp;
        $Biodata->save();

        $MovieRegistration = new MovieRegistration;
        $MovieRegistration->biodata_id              = $Biodata->id;
        $MovieRegistration->tiket_id                = Str::random(24);
        $MovieRegistration->registration_at         = date('Y-m-d H:i:s');
        $MovieRegistration->save();
        return view('MovieRegistration.movieRegistration')
        ->with('success', self::$pageTitle.' Movie Registration Successfully');
        // return view ('', compact('pageTitle'));
    }
    public function MovieRegistration ()
    {
        $pageTitle = self::$pageTitle;
        return view ('MovieRegistration.movieRegistration', compact('pageTitle'));
    }
    public function edit ($id)
    {
        $Movie = MovieRegistration::find(decrypt($id));
        $pageTitle = self::$pageTitle;

        return view('MovieRegistration.edit', compact('Movie', 'pageTitle'));
    }
    public function update(Request $request, $id)
    { 
        $fieldUpdateBiodata = [
            'nama_lengkap'  => $request->input('nama_lengkap'),
            'no_identitas'      => $request->input('no_identitas'),
            'tempat_lahir'      => $request->input('tempat_lahir'),
            'tgl_lahir'   => $request->input('tgl_lahir'),
            'no_hp'     => $request->input('no_hp'),
        ];
        $fieldUpdateMovie = [
            'status'     => $request->input('status'),
        ];
        $Movie = MovieRegistration::find($id);
        DB::table('biodata')->where('id', $Movie->biodata_id)->update($fieldUpdateBiodata);
        DB::table('movie_registration')->where('id', $id)->update($fieldUpdateMovie);

        return redirect()->route('movieRegistration.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $Company = MovieRegistration::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('movieRegistration.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}