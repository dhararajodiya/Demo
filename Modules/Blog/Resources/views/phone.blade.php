
<div class="row mb-3">
    <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

    <div class="col-md-6">
        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
