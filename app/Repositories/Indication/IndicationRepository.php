<?php
namespace App\Repositories\Indication;

use App\Models\Indication;

/**
 * Class IndicationRepository
 * @package App\Repositories\Indication
 */
class IndicationRepository implements IndicationRepositoryContract
{
    
    public function find($id)
    {
        return Indication::findOrFail($id);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllIndications()
    {
        return Indication::all();
    }

    /**
     * @return mixed
     */
    public function listAllIndications()
    {
        return Indication::pluck('name', 'id');
    }

    /**
     * @param $requestData
     */
    public function create($requestData)
    {
        Indication::create($requestData->all());
    }
    
    public function update($id, $requestData)
    {
        $client = Indication::findOrFail($id);
        $client->fill($requestData->all())->save();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        Indication::findorFail($id)->delete();
    }
}
