<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $support_questions = [
            [
                'id' => 1,
                'owner' => 'Pirate Software',
                'title' => 'Where can I buy your games?',
                'description' => '
                    We have a steam page called "Pirate Software"
                '
            ]
        ];

        return view('support.index', [
            'support_questions' => $support_questions
        ]);
    }

    public function show($question)
    {
        dd($question);
        //return view('support.show', ['question' => $question]);
    }
}
