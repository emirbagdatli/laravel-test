<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Validate("email|min:10", message: "This mail is not suitable.")]
    public string $email;

    #[Validate("string|min:8", message: "Enter a valid password")]
    public string $password;

    public function auth() {
        $this->validate();
        Auth::attempt([
            "email" => $this->email,
            "password" => $this->password
        ]);

        $this->addError("password", "Success"); 
    }

    public function render()
    {
        return view('livewire.login');
    }
}
