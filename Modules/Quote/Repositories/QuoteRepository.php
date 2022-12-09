<?php

namespace Modules\Quote\Repositories;


use Modules\Quotes\Entities\Quote;
use Modules\Quotes\Interfaces\QuotesRepositoryInterface;

class QuoteRepository  implements QuoteRepositoryInterface
{
   


    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    // public function all()
    // {
    //     // TODO: Implement all() method.
    //     return $this->model::all();
    // }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return $this->model::create($data);
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
        return $this->model::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->model::where('id', $id)->delete();
    }


   public function all(): array {

        // $quotes = [
        //     new Quote([
        //         'quote' => "practice make perfect",
        //         'author' => "olamilekan"
        //     ]),
        // ];

        // return $quotes ; 

        return Quote::all();
    }

    public function postQoute(){
        $post = new Quote();
        return $post;
    }

}
