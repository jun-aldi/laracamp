@if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <strong>{{ $message }}</strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>{{ $message }}</strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
