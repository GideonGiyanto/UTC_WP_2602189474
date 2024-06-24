<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Writer;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function index(){
        $subjects = Subject::paginate(2);
        return view('index', compact("subjects"));
    }

    function indexByCategory($id){
        $subjects = Subject::where('category_id', $id);

        $category = Category::find($id);

        return view('indexByCategory', compact("subjects", "category"));
    }

    function writer($id){
        $writers = Writer::all();
        return view('writer', compact("writers"));
    }

    function detail($id){
        $subject = Subject::find($id);
        return view('detail', compact("subject"));
    }

    function about(){
        return view('about');
    }
}
