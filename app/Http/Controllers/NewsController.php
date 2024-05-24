<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $announcements = DB::table('news')->latest()->get();

        return view('news.index', [
            'announcements' => $announcements
        ]);
    }

    public function show(News $news)
    {
        return view('news.show', ['news' => $news]);
    }
}
