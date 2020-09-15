<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * seasonController
 */
class seasonController extends Controller
{
    
    /**
     * getSeason: get season and validate
     *
     * @param  mixed $request
     * @return void
     */
    public function getSeason(Request $request)
    {
        /* check if form is submitted */
        if ('POST' == $request->method()) {
            $validator = Validator::make($request->all(), [
                'season' => [
                    'required',
                    Rule::in(['sun', 'rain'])
                ],
            ]);

            if ($validator->fails()) {
                return redirect('season')
                    ->withErrors($validator);
            }
            return view('season', ['type' => $request->input('season')]);die;
        }

        return view('season', ['type' => '']);
    }
}
