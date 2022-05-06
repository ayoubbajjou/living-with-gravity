<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

class QaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminPanel(Request $request)
    {
        $questions =  Question::orderByDesc('created_at')->paginate(20);
        return Inertia::render('Questions/index', compact('questions'));
    }

    public function answerQuestion(Request $request, $id) {
        $question =  Question::findOrFail($id);

        return Inertia::render('Questions/Answer', compact('question'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $bike_id)
    {
        return Question::where('bike_id', $bike_id)->whereNotNull('answer')->orderByDesc('created_at')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeAnswer(Request $request, $id)
    {
        $question = Question::findOrFail($id);

        $question->update([
            'answer' => $request->form['answer']
        ]);

        return Redirect::route('/questions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bike_id' => 'required',
            'question' => 'required',
        ]);
        Question::create([
            'bike_id' => $request->bike_id,
            'question' => $request->question,
            'user_id' => auth()->id()
        ]);

        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
