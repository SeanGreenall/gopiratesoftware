<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function index()
    {
        $support_questions = DB::table('supports')->latest()->get();

        return view('support.index', [
            'support_questions' => $support_questions
        ]);
    }

    public function show(Support $question)
    {
        return view('support.show', ['question' => $question]);
    }
}
