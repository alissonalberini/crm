<?php
namespace App\Repositories\Imobile;

use App\Models\Imobile;

/**
 * Class ImobileRepository
 * @package App\Repositories\Imobile
 */
class ImobileRepository implements ImobileRepositoryContract
{
    
    public function find($id)
    {
        return Imobile::findOrFail($id);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllImobiles()
    {
        return Imobile::all();
    }

    /**
     * @return mixed
     */
    public function listAllImobiles()
    {
        return Imobile::pluck('name', 'id');
    }

    /**
     * @param $requestData
     */
    public function create($requestData)
    {
        Imobile::create($requestData->all());
    }
    
    public function update($id, $requestData)
    {
        $client = Imobile::findOrFail($id);
        $client->fill($requestData->all())->save();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        Imobile::findorFail($id)->delete();
    }
}
