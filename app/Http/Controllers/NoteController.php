<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
// importamos el modelo
use App\Models\Note;
// importamos las validaciones desde NoteRequest que hemos creado
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // tomamos todas las notas y las guardamos en una variable
       $notes = Note::all();
       // devolvemos una respuesta json con las notas
       return response()->json($notes, 200);
    }

    /**
     * Show the form for creating a new resource.
     * crea una nueva nota
     * da como respuesta success true y la nueva nota
     *
     */
    public function store(NoteRequest $request)
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => 'true',
            'data' => $note
        ], 201);

    }



    /**
     * Display the specified resource.
     * busca la nota especifica y la muestra
     */
    public function show(string $id)
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }


    /**
     * Update the specified resource in storage.
     * actualiza la nota especifica
     */
    public function update(NoteRequest $request, string $id)
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success' => true,
            'data' => $note

        ], 200);


    }

    /**
     * Remove the specified resource from storage.
     * elimina la nota elegida
     */
    public function destroy(string $id)
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
