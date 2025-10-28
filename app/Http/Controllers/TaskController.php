<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer la liste de toutes les taches.
        //$tasks = Task::all();
        
        // Récupérer la liste des taches avec user SPECIFIQUE.
        $tasks = Task::where('user_id', Auth::id())->get();
              
        // Verification si le code génère une erreur (débuguer).
        //dd($tasks);
        
        // Retourner la vue avec les taches.
        return view('index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données reçues
        //dd($request->all());
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
        ]);
        
        Task::create([
            'titre' => $validated['titre'],
            'user_id' => $validated['user_id'],
        ]);
        
        
        return to_route('index.App',['post' => $validated['user_id']]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}