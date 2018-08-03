<?php
namespace App\Http\Controllers;

use Session;
use App\Http\Requests;
use App\Http\Requests\Indication\StoreIndicationRequest;
use App\Repositories\Indication\IndicationRepositoryContract;

class IndicationsController extends Controller
{

    protected $indications;

    /**
     * IndicationsController constructor.
     * @param IndicationRepositoryContract $indications
     */
    public function __construct(IndicationRepositoryContract $indications)
    {
        $this->indications = $indications;
        $this->middleware('user.is.admin', ['only' => ['create', 'destroy']]);
    }

    /**
     * @return mixed
     */
    public function index()
    {
        //dd($this->indications->getAllIndications());
        return view('indications.index')
            ->withIndication($this->indications->getAllIndications());
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('indications.create');
    }

    /**
     * @param StoreIndicationRequest $request
     * @return mixed
     */
    public function store(StoreIndicationRequest $request)
    {
        $this->indications->create($request);
        Session::flash('flash_message', 'Successfully created New Indication');
        return redirect()->route('indications.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return mixed
     */
    public function edit($id)
    {
        return view('indications.edit')
            ->withIndication($this->indications->find($id));
    }

    
    public function update($id, StoreIndicationRequest $request)
    {
        $this->indications->update($id, $request);
        Session()->flash('flash_message', 'Indication successfully updated');
        return redirect()->route('indications.index');
    }

    
    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->indications->destroy($id);
        return redirect()->route('indications.index');
    }
}
