@if (session('success'))
	<div class="alert alert-success">
	      <p>{{ session('success') }}</p>
	</div>
@endif

@if (session('fail'))
    <div class="alert alert-danger">
          <p>{{ session('fail') }}</p>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif