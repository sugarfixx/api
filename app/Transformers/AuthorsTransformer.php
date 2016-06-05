<?php

namespace App\Transformers;

use App\Author;
use League\Fractal\TransformerAbstract;

class AuthorsTransformer extends TransformerAbstract
{
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
}