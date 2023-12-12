<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail)
    {
        return mb_substr($value, 0, 1) === mb_strtoupper(mb_substr($value, 0, 1));
    }


    public function message()
    {
        return 'The :attribute does not start with an uppercased letter.';
    }
}

