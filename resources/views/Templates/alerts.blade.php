@if (session('success'))
    <div class="alert alert-success" id="alert">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" id="alert">
        {{session('error')}}
    </div>
@endif
