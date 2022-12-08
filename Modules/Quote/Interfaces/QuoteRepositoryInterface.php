<?php

namespace Modules\Quote\Interfaces;

use Illuminate\Http\Request;
use Modules\Quote\Interfaces\QuoteRepositoryInterface;

interface QuoteRepositoryInterface
{
    
   function all(): array ;
}
