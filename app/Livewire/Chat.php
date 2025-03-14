<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Chat extends Component
{
    public $user; // Properti untuk menyimpan data user

    /**
     * Mount function untuk menangkap ID user yang dikirim.
     * 
     * @param int $userId
     */
    public function mount($userId)
    {
        $this->user = $this->getUser($userId);
    }

    /**
     * Render tampilan Livewire chat.
     * 
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.chat', [
            'user' => $this->user, // Kirim data user ke view
        ]);
    }

    /**
     * Mengambil data user berdasarkan ID.
     * 
     * @param int $userId
     * @return \App\Models\User|null
     */
    public function getUser($userId)
    {
        return User::find($userId);
    }
}
