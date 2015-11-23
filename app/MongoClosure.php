<?php
namespace App;

use Franzose\ClosureTable\Models\ClosureTable;

class mongoClosure extends ClosureTable implements MongoClosureInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mongo_closure';
}
