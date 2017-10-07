<?php

namespace App\Http\Controllers\Manager;

use App\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    protected $messages = [
        'sayfaAdi.required' => ' Sayfa Adı Gereklidir.',
        'sayfaAdi.max' => ' Sayfa Adı maksimum 55 karakter olabilir.'
        ];
    public function index()
    {
        $pages = Pages::where('status','active')->orderby('id','asc')->get();
        return view('manager.pages.index')->withPages($pages);
    }

    public function create()
    {
        return view('manager.pages.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(),array(
           'sayfaAdi' => 'required|max:55',
        ),$this->messages);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else if($validator->passes())
        {
            $page = Pages::create([
                'page_name' => Input::get('sayfaAdi'),
                'slug' => str_slug(Input::get('sayfaAdi')),
                'status' => 'active'
            ]);

            return Redirect::route('manager.pages')->withSuccess('Başarıyla Yeni Bir Sayfa Oluşturdunuz.');
        }

    }

    public function edit($id)
    {
        $page = Pages::find($id);
        return view('manager.pages.edit')->withPage($page);
    }

    public function update()
    {
        $validator = Validator::make(Input::all(),array(
            'sayfaAdi' => 'required|max:55',
        ),$this->messages);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else if($validator->passes())
        {

            Pages::where('id', Input::get('id'))->update([
                'page_name' => Input::get('sayfaAdi'),
                'slug' => str_slug(Input::get('sayfaAdi')),
                'status' => 'active'
            ]);

            return Redirect::route('manager.pages')->withSuccess('Başarıyla Yeni Bir Sayfa Güncellediniz.');
        }
    }

    public function delete()
    {
        $inputs = Input::all();
        $rules = [
            'id' => 'required',
        ];
        $validation = Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return Redirect::back()->withInput()->withErrors($validation);
        }
        elseif ($validation->passes())
        {

            Pages::where('id', Input::get('id'))->update([
                'status' => 'removed',
            ]);
            return Redirect::route('manager.pages')->withSuccess('Başarıyla Bir Sayfa Sildiniz!');


        } else {
            App::abort(404);
        }
    }
}
