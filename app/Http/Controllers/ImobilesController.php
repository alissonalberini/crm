<?php
namespace App\Http\Controllers;

use Session;
use App\Http\Requests;
use App\Http\Requests\Imobile\StoreImobileRequest;
use App\Repositories\Imobile\ImobileRepositoryContract;
use App\Repositories\Setting\SettingRepositoryContract;

use App\Models\Imobile;
use App\Models\City;
use App\Models\State;
use App\Models\Region;
use Yajra\Datatables\Datatables;

class ImobilesController extends Controller
{

    protected $imobiles;
    protected $settings;

    /**
     * ImobilesController constructor.
     * @param ImobileRepositoryContract $imobiles
     */
    
    public function __construct(
            ImobileRepositoryContract $imobiles, 
            SettingRepositoryContract $settings
    )
    {
        $this->imobiles = $imobiles;
        $this->middleware('user.is.admin', ['only' => ['create', 'destroy']]);
        $this->settings = $settings;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return view('imobiles.index')
            ->withImobile($this->imobiles->getAllImobiles());
    }
    
    /**
     * Make json respnse for datatables
     * @return mixed
     */
    public function anyData()
    {
        $datas = Imobile::select(['id', 'name','public_place','value']);
        return Datatables::of($datas)
            ->addColumn('namelink', function ($datas) {
                return '<a href="imobiles/' . $datas->id . '" ">' . $datas->name . '</a>';
            })
            ->add_column('edit', '
                <a href="{{ route(\'imobiles.edit\', $id) }}" class="btn btn-success" >Edit</a>')
            ->add_column('delete', '
                <form action="{{ route(\'imobiles.destroy\', $id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Delete" class="btn btn-danger" onClick="return confirm(\'Are you sure?\')"">

            {{csrf_field()}}
            </form>')
            ->make(true);
    }

    /**
     * @return mixed
     */
    public function create()
    {
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        $regions = Region::pluck('name', 'id');
        return view('imobiles.create')->with([
            'states' => $states,
            'cities' => $cities,
            'regions' => $regions
            ]);
    }

    /**
     * @param StoreImobileRequest $request
     * @return mixed
     */
    public function store(StoreImobileRequest $request)
    {
        $this->imobiles->create($request);
        Session::flash('flash_message', 'Successfully created New Imobile');
        return redirect()->route('imobiles.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return mixed
     */
    public function show($id)
    {
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        $regions = Region::pluck('name', 'id');
        return view('imobiles.show')
            ->withImobile($this->imobiles->find($id))
            ->withCompanyname($this->settings->getCompanyName())
            ->with([
                'states' => $states,
                'cities' => $cities,
                'regions' => $regions
            ]);
    }    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return mixed
     */
    public function edit($id)
    {
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        $regions = Region::pluck('name', 'id');
        return view('imobiles.edit')
            ->withImobile($this->imobiles->find($id))
            ->with([
                'states' => $states,
                'cities' => $cities,
                'regions' => $regions
            ]);
    }

    
    public function update($id, StoreImobileRequest $request)
    {
        $this->imobiles->update($id, $request);
        Session()->flash('flash_message', 'Imobile successfully updated');
        return redirect()->route('imobiles.index');
    }

    
    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->imobiles->destroy($id);
        return redirect()->route('imobiles.index');
    }
}
