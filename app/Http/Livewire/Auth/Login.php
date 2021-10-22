<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {

        $this->validateRequest();
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }
        return redirect()->intended(route('home'));
    }

    private function validateRequest()
    {
        $request = request()->validate($this->rules);
        foreach ($this->rules as $field => $validations)
        {
            if(isset($request[$field]) && !empty($request[$field]) && property_exists($this, $field))
                {
                    $this->$field = $request[$field];
                }
        }
        return $request;
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
