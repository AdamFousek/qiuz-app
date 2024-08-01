<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpenQuizRequest;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Quiz;
use Inertia\Inertia;
use Inertia\Response;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreQuizRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz): Response
    {
        return Inertia::render('Quiz/Show', [
            'quiz' => $quiz->only('id', 'question', 'answer1', 'answer2', 'answer3', 'answer4'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function open(OpenQuizRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        return redirect()->route('question.show', $data['hash']);
    }
}
