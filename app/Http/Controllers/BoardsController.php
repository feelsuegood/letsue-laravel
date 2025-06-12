<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boards = Board::all();
        // view -> resource/views/boards
        return view('boards.index')->with('lists', $boards);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('boards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:255',
            'contents' => 'required|max:1000',
        ]);

        Board::create($request->all());

        return redirect()->route('boards.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Board $board)
    {
        $board = Board::where('id', $board->id)->first();

        return view('boards.show')->with('board', $board);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        $board = Board::where('id', $board->id)->first();

        return view('boards.edit')->with('board', $board);
    }

    /**
     * Update the specified resource in storage.
     */

    //* transfer $board in Board model
    public function update(Request $request, Board $board)
    {

        $request->validate([
            'subject' => 'required|max:255',
            'contents' => 'required|max:1000',
        ]);

        $board->update($request->all());

        return redirect()->route('boards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        $board->delete();

        return redirect()->route('boards.index');
    }
}
