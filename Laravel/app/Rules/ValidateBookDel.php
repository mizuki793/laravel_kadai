<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateBookDel implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //0,1のみの許可
        if(preg_match("[0,1]",$value)){
            return true;
        }
            return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Delは0,1を入力してください';
    }
}
