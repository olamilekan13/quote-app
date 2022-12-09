<?php

namespace Modules\Quote\Interfaces;

use Illuminate\Http\Request;
use Modules\Quote\Interfaces\QuoteRepositoryInterface;

interface QuoteRepositoryInterface
{
    
   public function all();

   public function create(array $data);

   public function update($id, array $data);

   public function delete($id);
}
