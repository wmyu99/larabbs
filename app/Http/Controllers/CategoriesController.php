<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Request $request,Topic $topic,Category $category)
    {
        $topics = $topic->WithOrder($request->order)->where('category_id',$category->id)->paginate(10);
        return view('topics.index',compact('topics','category'));
    }
}
