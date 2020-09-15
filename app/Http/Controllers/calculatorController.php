<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class calculatorController extends Controller
{

    /**
     * calculateInstruction
     *
     * @param  mixed $request
     * @return void
     */
    public function calculateInstruction(Request $request)
    {
// dd($request->all());
        /* check if form is submitted */
        if ('POST' == $request->method()) {
            $validator = Validator::make($request->all(), [
                'firstInput' => [
                    'required',
                    'regex:/[1-9]/'
                ],
                'secondInput' => [
                    'required',
                    'regex:/[1-9]/'
                ],
                'instruction' => [
                    'required',
                    Rule::in(['+'])
                ]
            ]);

            if ($validator->fails()) {
                return redirect('calculator')
                    ->withErrors($validator)
                    ->withInput();
            }

            $firstInput     = $request->input('firstInput');
            $secondInput    = $request->input('secondInput');

            return view('calculator', ['sum' => intval($firstInput) + intval($secondInput)]);
        }

        return view('calculator', ['type' => '']);

    }
}
