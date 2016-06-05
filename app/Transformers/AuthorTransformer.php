<?php

namespace App\Transformers;

use App\Author;
use App\Quote;
use League\Fractal\TransformerAbstract;

class AuthorTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'quotes'
    ];
    /**
     * Transform data object
     *
     * @param Author $author
     * @return array
     */
    public function transform(Author $author)
    {

        return [
            'id' => (int) $author->id,
            'name' => $author->name,
            'created_at' => $author->created_at
        ];
    }
    public function includeQuotes($author)
    {
        $quotes = $author->quotes;
        return $this->collection($quotes, new QuotesTransformer);
    }
}