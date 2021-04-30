<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Apipelanggan extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    /**
     * Pelanggan PDAM
     */
    public function users_get()
    {
        $pelangganLama = $this->db->get('pelanggan')->result_array();
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $id = $this->get('IdPelanggan');

        if ($id === null) {
            // Check if the users data store contains users
            if ($pelangganLama) {
                // Set the response and exit
                $this->response($pelangganLama, 200);
            } else {
                // Set the response and exit
                $this->response([
                    'status' => false,
                    'message' => 'No pelangganLama were found'
                ], 404);
            }
        } else {
            if (array_key_exists($id, $pelangganLama)) {
                $this->response($pelangganLama[$id], 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No such user found'
                ], 404);
            }
        }
    }
}
