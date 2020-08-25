<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Sertifikat_model;
use App\Models\Gedung_model;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Lahan extends ResourceController
{
    protected $modelName    = 'App\Models\Lahan_model';
    protected $format       = 'json';

    public function index()
    {
        $params_query = $this->request->getGet();         
        $lahan = $this->model->like($params_query)->get()->getResultArray();  
        return $this->respond($lahan);
    }  
}