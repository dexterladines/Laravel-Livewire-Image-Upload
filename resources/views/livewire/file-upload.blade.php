<form wire:submit.prevent="submit" enctype="multipart/form-data">

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputName">Title:</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Title" wire:model="title">
        @error('title')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputName">File:</label>
        <input type="file" class="form-control" id="exampleInputName" wire:model="file">
        @error('name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success text-center">Save</button>
    </div>
</form>

