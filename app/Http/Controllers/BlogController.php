<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\Resources\BlogCollection;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all blogs
        $blogs = new BlogCollection(Blog::latest()->paginate(10));
        $blogs = json_encode($blogs);
        return view("blogs", ["blogs" => $blogs]);
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
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $blog = null;

        if (Blog::where(["slug" => $request->slug])->first()) {
            $blog = new BlogResource(Blog::where(["slug" => $request->slug])->first());
        }

        if (Blog::where(["id" => $request->slug])->first()) {
            $blog = new BlogResource(Blog::where(["id" => $request->slug])->first());
        }

        if ($blog) {
            $blog = json_encode($blog);
            return view("blog", ["blog" => $blog]);
        } else {
            // return "BLog Not found";
            return $request->slug;
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}