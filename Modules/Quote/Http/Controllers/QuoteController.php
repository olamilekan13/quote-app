<?php

namespace Modules\Quote\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Quote\Interfaces\QuoteRepositoryInterface;

class QuoteController extends Controller
{

    protected QuoteRepositoryInterface $quote;

    // private QuoteRepositoryInterface $quoterepo ;

    public function  _construct(QuoteRepositoryInterface $quoteRepo){
        $this-> quote = $quoteRepo;

    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $quotes = $this->quote->all();
        return response()->json([
            'data' => $quotes,
            'status' => "success"

        ]);
        // return view('quote::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

         $quote = $this->quote->postQoute();
        $quote->quote =$request->quote;
        $quote->author=$request->author;
        $quotes = $this->quote->create($quote);

        return response()->json([
            'data' => $quotes,
            'status' => "success"

        ]);
        // $quote->save();
        // return view('quote::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('quote::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('quote::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
