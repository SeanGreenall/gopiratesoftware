<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->orderByDesc('id')->latest()->paginate(8);

        return view('news.index', [
            'news' => $news
        ]);
    }

    public function show(News $news)
    {

        return view('news.show', ['article' => $news]);
    }
}
