<?php

namespace App\Http\Controllers;

use App\Models\Supporter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

class SupporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'zip' => 'required',
            "source" => ""
        ]);
        try {
            $supporter = new Supporter();
            $supporter->fill($validated);
            $supporter->hash = Str::random(64);
            $supporter->save();
            $response = [
                "success" => true
            ];
        } catch (\Exception $e) {
            $response = [
                "success" => false,
                "error" => $e->getMessage()
            ];
            return response()->json($response);
            exit;
        }
        if (isset($request->all()["public"]) && $request->all()["public"] == 1) {
            try {
                Mail::to($supporter->email)->send(new VerifyEmail($supporter));
            } catch (\Exception $e) {
                $response = [
                    "success" => false,
                    "error" => $e->getMessage()
                ];
                return response()->json($response);
                exit;
            }
        }
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supporter  $supporter
     * @return \Illuminate\Http\Response
     */
    public function show(Supporter $supporter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supporter  $supporter
     * @return \Illuminate\Http\Response
     */
    public function edit(Supporter $supporter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supporter  $supporter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supporter $supporter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supporter  $supporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supporter $supporter)
    {
        //
    }

    public static function verify($hash)
    {
        $supporter = Supporter::where("hash", $hash)->where("enabled", false)->get();
        if (count($supporter) == 0) {
            return false;
        } else if (count($supporter) > 1) {
            return false;
        } else {
            $supporter = $supporter[0];
        }
        $supporter->enabled = true;
        $supporter->save();
        return true;
    }
}
