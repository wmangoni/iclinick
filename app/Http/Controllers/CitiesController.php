<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function loadCidades()
    {
        $cities = City::where('state_id', $this->request->input('id_state'))->get()->toArray();

        $options = $this->transformArrayToOptions($cities);

        if (!is_null($cities)) {
            $data['code'] = 200;
            $data['options'] = $options;
        } else {
            $data['code'] = 500;
        }

        return json_encode($data);
    }

    /**
     * @param $array
     * @return string
     */
    public function transformArrayToOptions($array)
    {
        $options = '<option value="">Selecione</option>';

        foreach ($array as $key => $value) {
            $options .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
        }

        return $options;
    }
}
