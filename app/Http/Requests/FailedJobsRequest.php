<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FailedJobsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'fromDate' => 'required|integer',
            'toDate' => 'required|integer|gte:fromDate',
            'sendMethod' => 'required'
        ];
    }


    /**
     * @return array
     */
    public function messages():array
    {
        return [
            'fromDate.required' => 'Il campo Data Inizio è obbligatorio',
            'fromDate.integer' => 'Il campo Data Inizio contiene valori non validi',
            'toDate.required' => 'Il campo Data Fine è obbligatorio',
            'toDate.integer' => 'Il campo Data Fine contiene valori non validi',
            'toDate.gte' => 'Il campo Data Fine deve essere maggiore del campo Data Inizio',
        ];
    }
}
