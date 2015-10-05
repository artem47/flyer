@inject('countries', 'App\Http\Utilities\Country')

<div class="form-group">
    <label for="street">Street:</label>
    <input type="text" name="street" id="street" class="form-control" value="{{ old('street')}}"></input>
</div>

<div class="form-group">
    <label for="city">City:</label>
    <input type="text" name="city" id="city" class="form-control" value="{{ old('city')}}"></input>
</div>

<div class="form-group">
    <label for="zip">Zip Code:</label>
    <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip')}}"></input>
</div>

<div class="form-group">
    <label for="country">Country:</label>
    <select id="country" name="country" class="form-control">
        @foreach($countries::all() as $country => $code)
            <option value="{{ $code }}">{{ $country }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="state">State:</label>
    <input type="text" name="state" id="state" class="form-control" value="{{ old('state')}}"></input>
</div>

<hr>

<div class="form-group">
    <label for="price">Price:</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price')}}"></input>
</div>

<div class="form-group">
    <label for="description">Home description:</label>
            <textarea type="text" name="description" id="descroption" class="form-control" rows="10"
                      value="{{ old('price')}}">

            </textarea>
</div>

<div class="form-group">
    <label for="photo">Photos:</label>
    <input type="file" name="photo" id="photo" class="form-control" value="{{ old('photo')}}"></input>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Создать флаер</button>
</div>