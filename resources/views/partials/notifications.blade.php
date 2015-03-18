@if (Session::has('error'))
<div class="alert alert-danger" role="alert">
    <strong>Error:</strong> {{ Session::get('error') }}
</div>
@endif