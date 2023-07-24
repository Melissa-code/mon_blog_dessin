{{-- Alert success message --}}
<section class="text-center">
    {{-- @dump(Session::all())--}}
    @if($message = Session::get('success'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
</section>

{{-- Alert warning message --}}
<section class="text-center">
    @if($message = Session::get('warning'))
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
</section>

{{-- Alert danger message --}}
<section class="text-center">
    @if($message = Session::get('danger'))
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
</section>
