@if($errors->has())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif