<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    //

    function geteditcustom()
    {
        $options = Option::pluck('value', 'name');
        return view('admin.customtheme.edit', ['options' => $options]);
    }

    public function posteditcustom(Request $request)
    {

        $fields = $request->all();
        /*dd($fields['value']['logo']);*/
        $img_link= '';
        if ($request->hasFile('value.logo')) {
            //upload
            $files = $request->file('value.logo');
            $name = $files->getClientOriginalName();
            $name_image = str_random(4) . "_" . $name;
            $year = date('Y');
            $month = date('m');
            $files->storeAs("public/logo/{$year}/{$month}", $name_image);
            $img_link = "logo/{$year}/{$month}/{$name_image}";
        }
        foreach ($fields['value'] as $name => $value) {
            Option::where('name', '=', $name)
                ->update([
                    'value' => $name == 'logo' ? $img_link : $value
                ]);
        }
        return redirect()->route('geteditcustom')->with('notification', 'Edit successfully');
    }

    function creatfeild()
    {
        return view('admin.customtheme.creatfeild');
    }

    function storefeild(Request $request)
    {
        if (Option::create($request->all())) {
            \Log::info('Success');
            return redirect()->route('creatfeild')->with('notification', 'Edit successfully');
        } else {
            \Log::info('Error');
            return redirect()->route('creatfeild')->with('notification', 'not success');
        }
    }


}
