{{-- 
@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{$message}}</strong>
    </div>
@endif --}}
@if ($message = Session::get('success'))
<div class="m-0 text-center alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif