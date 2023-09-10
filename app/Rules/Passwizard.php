<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Passwizard implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $message = [];

        if (strlen($value) < 8) {
            $message[] = ' 8 caracteres';
        }

        if (! preg_match('/[a-z]/', $value)) {
            $message[] = ' um caracter minúsculo';
        }

        if (! preg_match('/[A-Z]/', $value)) {
            $message[] = ' um caracter maiúsculo';
        }

        if (! preg_match('/[@$!%*#?&]/', $value)) {
            $message[] = ' símbolos';
        }

        if (! preg_match('/[0-9]/', $value)) {
            $message[] = ' numeros';
        }

        if ($message) {
            $returnMessage = '';

            $lastKey = array_key_last($message);

            foreach ($message as $index => $msg) {
                if ($lastKey === $index) {
                    $returnMessage .= $msg.'.';
                } else {
                    $returnMessage .= $msg.', ';
                }
            }

            $fail('A senha precisa conter'.$returnMessage);
        }
    }
}
