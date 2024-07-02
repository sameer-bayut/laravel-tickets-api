<?php

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }

    

}
