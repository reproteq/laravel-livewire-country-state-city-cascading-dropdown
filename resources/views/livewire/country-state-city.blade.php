<div>
    <div class="mb-3 row">
        <label for="country" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.houses.create.content.country') }}</label>

        <div class="col-md-6">
            <select wire:model="selectedCountry" class="form-control">
                <option value="" selected>{{ trans('frontend.houses.create.content.choose_country') }}</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @if (!is_null($selectedCountry))
        <div class="mb-3 row">
            <label for="state" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.houses.create.content.state') }}</label>

            <div class="col-md-6">
                <select wire:model="selectedState" class="form-control">
                    <option value="" selected>{{ trans('frontend.houses.create.content.choose_state') }}</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectedState))
        <div class="mb-3 row">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.houses.create.content.city') }}</label>

            <div class="col-md-6">
                <select wire:model="selectedCity" class="form-control" name="city_id">
                    <option value="" selected>{{ trans('frontend.houses.create.content.choose_city') }}</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
