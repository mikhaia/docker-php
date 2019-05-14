<?php

namespace App\Http\Controllers\Admin;

use DB;
use Config;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public $module = 'pages';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'module' => $this->module,
            'config' => Config::get('admin.'.$this->module),
            'items' => DB::table($this->module)->get()
        ];
        return view('admin/list', $data);
    }

    public function create()
    {
        $item = DB::getSchemaBuilder()->getColumnListing($this->module);
        $item = (object)array_fill_keys($item, '');
        $data = [
            'id' => null,
            'module' => $this->module,
            'config' => Config::get('admin.'.$this->module),
            'item' => $item
        ];
        return view('admin/form', $data);
    }

    public function edit($id)
    {
        $data = [
            'id' => $id,
            'module' => $this->module,
            'config' => Config::get('admin.'.$this->module),
            'item' => DB::table($this->module)->find($id)
        ];
        return view('admin/form', $data);
    }

    public function update($id)
    {
        $data = Input::except('_token', '_method');
        foreach($data as $key => $val)
            if(is_array($val))
                $data[$key] = json_encode($val);
        DB::table($this->module)->where('id', $id)->update($data);
        return back()->withInput();
    }

    public function store()
    {
        $data = Input::except('_token');
        foreach($data as $key => $val)
            if(is_array($val))
                $data[$key] = json_encode($val);
        DB::table($this->module)->insert($data);
        return redirect()->route('admin.'.$this->module.'.index');
    }

}