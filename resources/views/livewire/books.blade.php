<div>
  <div class="row col-md-12">
        <div class="col-md-4">
            @if($updateMode)
                @include('livewire.update')
            @else
                @include('livewire.create')
            @endif
        </div>
        <div class="vl col-md-1"></div>
        <div class="col-md-7">
            <h4 class="text-center">Books Table</h4>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Descrition</th>
                        <th width="150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <button wire:click="edit({{ $book->id }})" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $book->id }})" class="btn btn-warning btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    <div>

</div>
