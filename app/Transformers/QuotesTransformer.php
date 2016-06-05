<?php

namespace App\Transformers;

use App\Quote;
use App\Author;
use League\Fractal\TransformerAbstract;

class QuotesTransformer extends TransformerAbstract
{
    /**
     * Transform data object
     *
     * @param Quote $quotes
     * @return array
     */
    public function transform(Quote $quotes)
    {

        return [
            'id' => (int) $quotes->id,
            'quote' => $quotes->quote,
            'author' => $quotes->author->name,
            'created_at' => $quotes->created_at
        ];
    }
}