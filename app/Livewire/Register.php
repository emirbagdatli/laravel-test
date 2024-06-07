<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

use App\Models\User;

class Register extends Component
{
    #[Validate("email|min:10", message: "This mail is not suitable.")]
    public string $email;

    #[Validate("string|min:8", message: "Enter a valid password")]
    public string $password;

    public function save() {
        $result = User::where("email", $this->email); 
        if($result->count() > 0) {
            return $this->addError("exist", "User exists!"); 
        }

        User::create([
            "name" => " ",
            "email" => $this->email, 
            "password" => $this->password
        ])->save(); 
        
        return $this->addError("registered", "User registered successfully"); 
    }

    public function render()
    {
        return view('livewire.register');
    }
}
