

@section('title', 'File Error')

@section('content')
<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 40vh;">
    <div class="text-center">
        <!-- Error Icon -->
        <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="100" height="100" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a.5.5 0 0 1 .036.708L2.1 9h11.8L7.982 2.274a.5.5 0 1 1 .036-.708zm-4.53 8.468a.5.5 0 0 1-.588-.027L.11 7.536a.5.5 0 0 1 0-.848L3.864 3.71a.5.5 0 0 1 .588.027l3.857 3.748a.5.5 0 0 1 0 .848L4.452 9.996zm6.293.27a.5.5 0 0 1 .588-.027l3.857-3.749a.5.5 0 0 1 0-.848l-3.757-2.978a.5.5 0 0 1-.588.027L8.552 7.003a.5.5 0 0 1 0 .848l3.757 2.978z"/>
            </svg>
        </div>

        <!-- Error Message -->
        <h1 class="text-danger">File Error</h1>
        <p class="text-muted mb-4">{{ $message }}</p>

        <!-- Action Buttons -->
        <div>
           
        </div>
    </div>
</div>
