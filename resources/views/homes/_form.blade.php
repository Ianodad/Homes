@csrf
<div class="form-group">
    <label for="name">Title</label>
    <input 
        class="form-control {{ $errors->has('title') }} ? 'is-invalid' :'' " 
        type="text"
        name="title" 
        id="title" 
        value="{{ old('title', $home->title) }}">

    @error('title')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    <label for="name">Your Location:</label>
    <input 
        class="form-control {{ $errors->has('location') }} ? 'is-invalid' :'' " 
        type="text" 
        name="location"
        id="location"
        value="{{ old('location', $home->location) }}">

    @error('location')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror

</div>
<div class="form-group">
    <label for="name">Description:</label>
    <textarea 
        class="form-control {{ $errors->has('description') }} ? 'is-invalid' :'' " 
        type="text"
        name="description" 
        id="description"
        value="{{ old('description', $home->description) }}">
    </textarea>

    @error('description')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    <label for="type">Choose type of Home:</label>
    <select 
        class="form-control {{ $errors->has('types') }} ? 'is-invalid' :'' " 
        name="type" 
        id="type"
        value="{{ old('type', $home->type) }}">
        <option value="Town House">Town House</option>
        <option value="Manssion">Manssion</option>
        <option value="Flat">Flat</option>
        <option value="Bagaloo">Bagaloo</option>
    </select>

    @error('type')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>

<div class="form-group">
    <label for="base">No of rooms:</label>
    <select 
        class="form-control {{ $errors->has('no_rooms') }} ? 'is-invalid' :'' " 
        name="no_rooms" 
        id="no_rooms"
        value="{{ old('no_rooms', $home->no_rooms) }}">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    @error('no_rooms')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    <label for="base">Price:</label>
    <input 
        class="form-control {{ $errors->has('price') }} ? 'is-invalid' :'' " 
        type="number" 
        name="price"
        id="price"
        value="{{ old('price', $home->price) }}">
    @error('price')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    <div class="form-check form-check-inline">
        <input 
            class="form-check-input" 
            type="checkbox" id="iron_sheets" 
            name="materials[]" 
            value="Iron Sheets"
            >
        <label class="form-check-label" for="iron_sheets">Iron Sheets</label>
    </div>
    <div class="form-check form-check-inline">
        <input 
            class="form-check-input" 
            type="checkbox" 
            id="wooden_floors" 
            name="materials[]" 
            value="Wooden Floors">
        <label class="form-check-label" for="wooden_floors">Wooden
            Floors</label>
    </div>
    <div class="form-check form-check-inline">
        <input 
            class="form-check-input" 
            type="checkbox" 
            id="solar_power" 
            name="materials[]" 
            value="Solar Power">
        <label class="form-check-label" for="solar_power">Solar Power</label>
    </div>
    <div class="form-check form-check-inline">
        <input 
            class="form-check-input" 
            type="checkbox" 
            id="wooden_doors" 
            name="materials[]" 
            value="Wooden Doors">
        <label class="form-check-label" for="wooden_doors">Wooden Doors</label>
    </div>
    <div>
        <button class="btn btn-primary my-2 w-100" type="submit" value="Submit Home">{{ $buttonText }}</button>
    </div>
</div>
