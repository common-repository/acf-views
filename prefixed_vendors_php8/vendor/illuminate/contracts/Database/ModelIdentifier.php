<?php

namespace Org\Wplake\Advanced_Views\Optional_Vendors\Illuminate\Contracts\Database;

class ModelIdentifier
{
    /**
     * The class name of the model.
     *
     * @var string
     */
    public $class;
    /**
     * The unique identifier of the model.
     *
     * This may be either a single ID or an array of IDs.
     *
     * @var mixed
     */
    public $id;
    /**
     * The relationships loaded on the model.
     *
     * @var array
     */
    public $relations;
    /**
     * The connection name of the model.
     *
     * @var string|null
     */
    public $connection;
    /**
     * The class name of the model collection.
     *
     * @var string|null
     */
    public $collectionClass;
    /**
     * Create a new model identifier.
     *
     * @param  string  $class
     * @param  mixed  $id
     * @param  array  $relations
     * @param  mixed  $connection
     * @return void
     */
    public function __construct($class, $id, array $relations, $connection)
    {
        $this->id = $id;
        $this->class = $class;
        $this->relations = $relations;
        $this->connection = $connection;
    }
    /**
     * Specify the collection class that should be used when serializing / restoring collections.
     *
     * @param  string|null  $collectionClass
     * @return $this
     */
    public function useCollectionClass(?string $collectionClass)
    {
        $this->collectionClass = $collectionClass;
        return $this;
    }
}
