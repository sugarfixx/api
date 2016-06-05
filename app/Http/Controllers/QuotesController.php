<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Quote;
use App\Http\Requests;
use App\Transformers\QuotesTransformer as QuotesTransformer;
use EllipseSynergie\ApiResponse\Laravel\Response;

class QuotesController extends Controller
{
    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function index()
    {
        $quotes = Quote::all();
        if ( !$quotes ) {
            return $this->response->errorNotFound('Quotes not found!');
        }
        return $this->response->withCollection($quotes, new QuotesTransformer);
    }

    public function show($id)
    {
        $randomQuote =  Input::get('random');
        if(isset($randomQuote)){
            return $this->getRandomQuote();
        }

        $quote = Quote::where('id',$id)->first();
        if ( !$quote ) {
            return $this->response->errorNotFound('Quote not found!');
        }
        return $this->response->withItem($quote, new QuotesTransformer);
    }

    public function getRandomQuote()
    {
        $quote = Quote::orderByRaw("RAND()")->first();
        if ( !$quote ) {
            return $this->response->errorNotFound('Quote not found!');
        }
        return $this->response->withItem($quote, new QuotesTransformer);
    }
}
