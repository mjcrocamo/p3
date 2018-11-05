@extends('layouts.master')

{{-- index page where user can search for their pirate name --}}
@section('content')
    <h1 class="title">What's in a Pirate Name?</h1>

    <h3>Ever wonder what your pirate name would be?<br/>
        Enter your first name, your birthday month, and last name
        to find out!</h3>

    <form method="GET" action="/nameProcess">
        <fieldset>
            <div class="formlabel">Enter First Name</div>
            <label>
                <input type="text" name="firstName" value='{{ old('firstName', $firstName) }}'>
            </label>
            @include('modules.field-error', ['field' => 'firstName'])

            <div class="formlabel">Select Birthday Month</div>
            <div class="radiobuttons">
                <label>
                    <input type="radio" name="month" value="Jan" {{ $month && old('month', $month) == 'Jan'  ? 'checked' : '' }}>
                    <span class="monthname">Jan</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Feb" {{ $month && old('month', $month) == 'Feb'  ? 'checked' : '' }}>
                    <span class="monthname">Feb</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Mar" {{ $month && old('month', $month) == 'Mar'  ? 'checked' : '' }}>
                    <span class="monthname">Mar</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Apr" {{ $month && old('month', $month) == 'Apr'  ? 'checked' : '' }}>
                    <span class="monthname">Apr</span>
                </label>
                <label>
                    <input type="radio" name="month" value="May" {{ $month && old('month', $month) == 'May'  ? 'checked' : '' }}>
                    <span class="monthname">May</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Jun" {{ $month && old('month', $month) == 'Jun'  ? 'checked' : '' }}>
                    <span class="monthname">Jun</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Jul" {{ $month && old('month', $month) == 'Jul'  ? 'checked' : '' }}>
                    <span class="monthname">Jul</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Aug" {{ $month && old('month', $month) == 'Aug'  ? 'checked' : '' }}>
                    <span class="monthname">Aug</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Sep" {{ $month && old('month', $month) == 'Sep'  ? 'checked' : '' }}>
                    <span class="monthname">Sep</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Oct" {{ $month && old('month', $month) == 'Oct'  ? 'checked' : '' }}>
                    <span class="monthname">Oct</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Nov" {{ $month && old('month', $month) == 'Nov'  ? 'checked' : '' }}>
                    <span class="monthname">Nov</span>
                </label>
                <label>
                    <input type="radio" name="month" value="Dec" {{ $month && old('month', $month) == 'Dec'  ? 'checked' : '' }}>
                    <span class="monthname">Dec</span>
                </label>
            </div>
            @include('modules.field-error', ['field' => 'month'])

            <div class="formlabel">Enter Last Name</div>
            <label>
                <input type='text' name='lastName' value='{{ old('lastName', $lastName) }}'>
            </label>
            @include('modules.field-error', ['field' => 'lastName'])

            <div class="check">
                <label>
                    <input type='checkbox' name="reverseName" {{ old('reverseName', $reverseName) ? 'checked' : '' }}>
                    Reverse Name
                </label>
            </div>
        </fieldset>

        <input type="submit" value="Discover Ye'Old Pirate Name" class="btn btn-primary">
    </form>

    @if($newPirateName)
        <div id="results">
            @if(!$reverseName)
                <div class="piratename">
                    <div class="pirate">Your pirate name is:</div>
                    <em>{{ $newPirateName["first"] }}</em>
                    <em>{{ $newPirateName["middle"] }}</em>
                    <em>{{ $newPirateName["last"] }}</em>
                </div>
                <img class="piratepic" src={{ $image }} />
            @endif
            @if($reverseName)
                <div class="piratename">
                    <div class="pirate">Your pirate name is:</div>
                    <em>{{ $newPirateName["last"] }}</em>
                    <em>{{ $newPirateName["middle"] }}</em>
                    <em>{{ $newPirateName["first"] }}</em>
                </div>
                <img class="piratepic" src={{ $image }}/>
            @endif
        </div>
    @endif
@endsection