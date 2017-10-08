<?php

namespace App\Http\Controllers\Manager;

use App\Content;
use App\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class ContentController extends Controller
{
    protected $messages = [
        'icerikBasligi.required' => 'İçerik Başlığı Gereklidir.',
        'kategori.required' => 'Kategori Gereklidir.'
    ];

    public function index()
    {
        $contents = Content::where('status','active')->orderBy('id','asc')->get();

        return view('manager.content.index')->withContents($contents);
    }

    public function create()
    {
        $pages = Pages::where('status','active')->orderby('id','asc')->get();

        return view('manager.content.create')->withPages($pages);
    }

    public function store()
    {
        $validator = Validator::make(Input::all(),array(
            'icerikBasligi' => 'required',
            'kategori' => 'required',
            'dosya' => 'mimes:pdf,txt',
        ),$this->messages);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else if($validator->passes())
        {
            if (Input::hasFile('dosya'))
            {
                // Image Upload
                if($files = Input::file('dosya')){

                    $file_name = str_slug(Input::get('icerikBasligi')).'.'.strtolower(Input::file('dosya')->getClientOriginalExtension());
                    $files->move('files', $file_name);
                }

                $content = Content::create([
                    'pages_id' => Input::get('kategori'),
                    'title' => Input::get('icerikBasligi'),
                    'content' => Input::get('icerik'),
                    'slug' => str_slug(Input::get('icerikBasligi')),
                    'file' => $file_name,
                    'status' => 'active'
                ]);

                }
                else{
                    $content = Content::create([
                        'pages_id' => Input::get('kategori'),
                        'title' => Input::get('icerikBasligi'),
                        'content' => Input::get('icerik'),
                        'slug' => str_slug(Input::get('icerikBasligi')),
                        'status' => 'active'
                    ]);
                }


            return Redirect::route('manager.pages')->withSuccess('Başarıyla Yeni Bir Sayfa Oluşturdunuz.');
        }
    }

    public function edit($id)
    {
        $pages = Pages::where('status','active')->orderby('id','asc')->get();

        $content = Content::find($id);
        return view('manager.content.edit')->withContent($content)->withPages($pages);
    }

    public function update()
    {
        $validator = Validator::make(Input::all(),array(
            'icerikBasligi' => 'required',
            'kategori' => 'required',
            'dosya' => 'mimes:pdf,txt',
        ),$this->messages);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else if($validator->passes())
        {
            if (Input::hasFile('dosya'))
            {

                // Image Upload
                if($files = Input::file('dosya')){


                   // $file_name = str_slug(Input::get('icerikBasligi')).'.'.strtolower(Input::file('dosya')->getClientOriginalExtension());
                    //$files->move('files', $file_name);

                    Content::where('id', Input::get('id'))->update([
                        'pages_id' => Input::get('kategori'),
                        'title' => Input::get('icerikBasligi'),
                        'content' => Input::get('icerik'),
                        'file' =>'ok',
                        'slug' => str_slug(Input::get('icerikBasligi')),
                        'status' => 'active'
                    ]);

                    return  'ok';
                }




            }
            else{
                Content::where('id', Input::get('id'))->update([
                    'pages_id' => Input::get('kategori'),
                    'title' => Input::get('icerikBasligi'),
                    'content' => Input::get('icerik'),
                    'slug' => str_slug(Input::get('icerikBasligi')),
                    'status' => 'active'
                ]);
            }


            return Redirect::route('manager.contents')->withSuccess('Başarıyla Bir İçerik Düzenlediniz.');
        }
    }
}
