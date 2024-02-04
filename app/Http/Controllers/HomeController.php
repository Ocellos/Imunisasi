<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baby;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $babies = Baby::all();

        return view('home', ['babies' => $babies]);
    }

    public function hasil($id)
    {
        $hasil = Baby::findOrFail($id);

        return view('hasil', compact('hasil'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_bayi' => 'required|string',
                'jenis_kelamin' => 'required|in:Perempuan,Laki-laki',
                'berat_badan' => 'required|numeric',
                'usia_polio' => 'required|numeric',
                'usia_campak' => 'required|numeric',
                'usia_BCG' => 'required|numeric',
                'keluhan' => 'nullable|array',
            ]);

            // Konversi array keluhan menjadi string sebelum disimpan
            $validatedData['keluhan'] = $validatedData['keluhan'] ? implode(', ', $validatedData['keluhan']) : '';

            $baby = Baby::create($validatedData);

            $efekNormalKeluhan = ['Demam', 'Pusing', 'Tidak nafsu makan', 'Mual', 'Nyeri otot', 'Kemerahan di area suntik', 'Anak rewel dan kelelahan', 'Muncul bekas berupa bisul'];

            $selectedKeluhan = collect(explode(', ', $baby->keluhan));
            $commonKeluhan = $selectedKeluhan->intersect($efekNormalKeluhan);

            $baby->hasil = $commonKeluhan->count() > 0 ? 'Efek Normal' : 'Efek Tidak Normal';
            $baby->save();

            return redirect('/dashboard')->with('status', 'Baby information has been submitted successfully!');
        } catch (\Exception $e) {
            // Handle error, misalnya:
            dd($e);
            return redirect('/dashboard')->with('error', 'An error occurred while submitting baby information. Please try again.');
        }
    }



}
