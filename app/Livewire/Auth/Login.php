<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $login = '';
    public $password = '';

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function update()
    {
        'Логин: '.$this->login;
    }
}
