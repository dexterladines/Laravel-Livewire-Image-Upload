<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class FileUpload extends Component
{

    use WithFileUploads;
    public $file, $title;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'file' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $validatedData['name'] = $this->file->store('files', 'public');
        
        File::create($validatedData);

        session()->flash('message', 'Image Uploaded Successfully.');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
