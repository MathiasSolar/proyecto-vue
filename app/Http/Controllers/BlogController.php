<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = blog::all();
        return response()->json($blog);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $blog = blog::create($request->post());
    return response()->json([
        'blog'=> $blog 
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
    return response()->json($blog);
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
    public function update(Request $request, blog $blog)
    {
        $blog->fill($request->post())->save();
        return response()->json([
            'blog'=> $blog
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        return response()->json([
            'mensaje'=> 'blog eliminado'
            ]);
    }
}
