<?php
namespace App;

use Franzose\ClosureTable\Models\ClosureTable;

class pageClosure extends ClosureTable implements PageClosureInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_closure';
}
