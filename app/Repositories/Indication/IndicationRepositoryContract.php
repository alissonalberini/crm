<?php
namespace App\Repositories\Indication;

interface IndicationRepositoryContract
{
    public function find($id);
    
    public function getAllIndications();
    
    public function listAllIndications();

    public function create($requestData);
    
    public function update($id, $requestData);

    public function destroy($id);
    
}
