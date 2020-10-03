@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <section class="alert alert-danger">{{ $error }}</section>
    @endforeach
@endif

@if(session('success'))
    <section class="alert alert-success">{{ session('success') }}</section>
@endif

@if(session('error'))
    <section class="alert alert-danger">{{ session('error') }}</section>
@endif