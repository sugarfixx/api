<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Requests;
use App\Transformers\AuthorsTransformer as AuthorsTransformer;
use App\Transformers\AuthorTransformer as AuthorTransformer;
use EllipseSynergie\ApiResponse\Laravel\Response;

class AuthorsController extends Controller
{
    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }
    public function index()
    {
        $authors = Author::all();
        if ( !$authors ) {
            return $this->response->errorNotFound('Authors not found!');
        }
        return $this->response->withCollection($authors, new AuthorsTransformer);

    }

    public function show($id)
    {
        $author = Author::where('id', $id)->first();
        if ( !$author ) {
            return $this->response->errorNotFound('Author not found!');
        }
        return $this->response->withItem($author, new AuthorTransformer);
    }
}
