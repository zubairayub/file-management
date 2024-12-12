<x-app-layout>
    <div class="container mt-4">
        <h3 class="mb-4">Select a User to View Folders</h3>
        
        <div class="row">
    @foreach($users as $user)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>

                    <!-- Display total folders and files count for each user -->
                    <p class="text-muted">
                        Total Folders: {{ $user->folders()->count() }} | Total Files: {{ $user->folders()->withCount('files')->get()->sum('files_count') }}
                    </p>

                    <p class="card-text">Click to view this user's folders.</p>
                    <a href="{{ route('admin.showUserFolders', ['userId' => $user->id]) }}" class="btn btn-primary w-100">
                        <i class="bi bi-folder"></i> View Folders
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

    </div>
</x-app-layout>
