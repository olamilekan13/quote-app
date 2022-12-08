<?php

namespace Modules\Quote\Repositories;


use Modules\Quotes\Entities\Quote;
use Modules\Quotes\Interfaces\QuotesRepositoryInterface;

class QuoteRepository  implements QuoteRepositoryInterface
{
   

    function all(): array {

        $quotes = [
            new Quote([
                'quote' => "practice make perfect",
                'author' => "olamilekan"
            ]),
        ];

        return $quotes ; 

        // return Quote::all();
    }
}
