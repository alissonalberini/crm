<?php
namespace App\Repositories\Imobile;

interface ImobileRepositoryContract
{
    public function find($id);
    
    public function getAllImobiles();
    
    public function listAllImobiles();

    public function create($requestData);
    
    public function update($id, $requestData);

    public function destroy($id);
    
}
