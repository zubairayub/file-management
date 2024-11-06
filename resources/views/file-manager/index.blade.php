<!-- resources/views/file-manager/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Your Folders</h2>
            <ul>
                @foreach($folders as $folder)
                    <li>
                        <a href="#">{{ $folder->name }}</a>
                        <form method="POST" action="{{ route('file-manager.delete-folder', $folder) }}" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <form method="POST" action="{{ route('file-manager.create-folder') }}">
                @csrf
                <input type="text" name="name" placeholder="Folder name" required>
                <button type="submit">Create Folder</button>
            </form>
        </div>

        <div class="col-md-6">
            <h2>Your Files</h2>
            <ul>
                @foreach($files as $file)
                    <li>
                        <a href="{{ asset('storage/' . $file->path) }}" target="_blank">{{ $file->name }}</a>
                        <form method="POST" action="{{ route('file-manager.delete-file', $file) }}" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <form method="POST" action="{{ route('file-manager.upload-file') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" required>
                <select name="folder_id">
                    <option value="">Select Folder</option>
                    @foreach($folders as $folder)
                        <option value="{{ $folder->id }}">{{ $folder->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Upload File</button>
            </form>
        </div>
    </div>
</div>
@endsection
