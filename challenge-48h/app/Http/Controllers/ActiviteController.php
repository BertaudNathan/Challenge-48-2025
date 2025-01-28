<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use App\Events\MessageSent;

class ActiviteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'zone' => 'required',
        ]);

        $id = auth()->id ?? 1;
        $attr = $request->all() + ['creator_id' => $id];

        $activite = Activite::create($attr);
        return redirect()->back();;
    }
}
