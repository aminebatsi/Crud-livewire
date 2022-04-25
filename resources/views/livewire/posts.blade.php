<div>
    @if($isOpen)
        @include('livewire.updatePost')
    @else
        @include('livewire.createPost')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
                <th>user_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
                <td>{{ $value->user_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>