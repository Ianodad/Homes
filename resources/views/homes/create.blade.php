@extends('layouts.main')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center text-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="header">ADD HOME</h1>
                </div>
                <div class="row">
                    <form action="/homes" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input class="form-control {{ $errors->has('title') }} ? 'is-invalid' :'' " type="text" name="title" id="title">
                            @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                              </div>
                            @endif
                            <label for="name">Your Location:</label>
                            <input class="form-control {{ $errors->has('location') }} ? 'is-invalid' :'' " type="text" name="location" id="location">
                            @if ($errors->has('location'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('location') }}</strong>
                              </div>
                            @endif
                            <label for="name">Description:</label>
                            <textarea class="form-control {{ $errors->has('descprition') }} ? 'is-invalid' :'' " type="text" name="descprition" id="descprition"></textarea>
                            @if ($errors->has('descprition'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('descprition') }}</strong>
                              </div>
                            @endif
                            <label for="type">Choose type of Home:</label>
                            <select class="form-control {{ $errors->has('types') }} ? 'is-invalid' :'' " name="types" id="types">
                                <option value="Town House">Town House</option>
                                <option value="Manssion">Manssion</option>
                                <option value="Flat">Flat</option>
                                <option value="Bagaloo">Bagaloo</option>
                            </select>
                            @if ($errors->has('types'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('types') }}</strong>
                             </div>
                            @endif
                            <label for="base">No of rooms:</label>
                            <select class="form-control {{ $errors->has('no_rooms') }} ? 'is-invalid' :'' " name="no_rooms" id="no_rooms" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @if ($errors->has('no_rooms'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('no_rooms') }}</strong>
                            </div>
                            @endif
                            <label for="base">Price:</label>
                            <input class="form-control {{ $errors->has('price') }} ? 'is-invalid' :'' " type="number" name="price" id="price">
                            @if ($errors->has('price'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('price') }}</strong>
                            </div>
                            @endif
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="iron_sheets" name="materials[]" value="Iron Sheets">
                                <label class="form-check-label" for="iron_sheets">Iron Sheets</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="wooden_floors" name="materials[]" value="Wooden Floors">
                                <label class="form-check-label" for="wooden_floors">Wooden Floors</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="solar_power" name="materials[]" value="Solar Power">
                                <label class="form-check-label" for="solar_power">Solar Power</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="wooden_doors" name="materials[]" value="Wooden Doors">
                                <label class="form-check-label" for="wooden_doors">Wooden Doors</label>
                            </div>
                            <button class="btn btn-primary my-2 w-100" type="submit" value="Submit Home">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
