<?php

namespace App\Http\Livewire;

use Livewire\Request;
use App\Models\Message;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function sendmessage()
    {
        $schema = new Message();
        $schema ->user_id;
        $schema->messsage = $this->message;
        $schema->email = $this->email;
        $schema->name = $this->name;
        $schema->status ="NEW";
        $schema->save();

        $this->email=$this->name=$this->message='';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
