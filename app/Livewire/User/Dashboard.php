<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Layout('layouts.user-app')]
    #[Title('Dashboad')]
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
