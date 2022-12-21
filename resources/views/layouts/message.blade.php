@if(session('msg'))
<div class="alert alert-success msg" role="alert">
        <p>{{ session('msg') }}</p>
  </div>
@endif
