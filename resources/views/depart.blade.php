@extends('layouts.main')
@section('content')

<h3>Date: {{$todayDate}}  Time: {{$todayTime}}</h3>
<div>
    <div>
    	<label for="train"><strong>Train:</strong></label>
        <select id="train">
        	<option label="MSC_518">MSC 518</option>
        </select>
    </div>
    <div>
        {{-- @foreach($station as $stations) --}}
            <label for="train"><strong>Starting Station</strong></label>
             <input type="text" class="form-control form-control-sm" name="r_animal_name" value="{{$station->starting_station}}">
        {{-- @endforeach --}}
    </div>
    {{-- <a class="btn btn-small btn-info" href="{{ URL::to('depart') }}">DEPART</a> --}}

</div>
@endsection