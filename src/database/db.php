<?php

// namespace VirusSR\database\db;

// use MongoDB\Client;
// use MongoDB\Database;
// use MongoDB\Collection;

// class db {
//     private Client $client;
//     private Database $db;
//     private Collection $collection;

//     public function __construct(string $uri = 'mongodb://localhost:27017', string $dbName = 'test') {
//         // Connect to MongoDB
//         $this->client = new Client($uri);
//         $this->db = $this->client->selectDatabase($dbName);

//         // Select or create the "phpsr" collection
//         $this->collection = $this->db->selectCollection('PHP-SR');
//     }

//     public function getCollection(): Collection {
//         return $this->collection;
//     }

//     // Example method to insert a document into the collection
//     public function insertDocument(array $document): void {
//         $this->collection->insertOne($document);
//     }

//     // Example method to find documents in the collection
//     public function findDocuments(array $filter = []): array {
//         return $this->collection->find($filter)->toArray();
//     }
// }

