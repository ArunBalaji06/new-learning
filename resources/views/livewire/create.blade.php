    <form>
        <h4 class="text-center">Create a Book</h2>
        <br>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Book Title" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Description:</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Enter Book Description"></input>
            @error('description') <span class="text-danger">{{ $message }}</span>@enderror
        </div><br>
        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </form>
