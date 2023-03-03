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
    	<form>
    		<label>
    			<input type="radio" name="radio" value="1">Northbound
	    	</label>
	    	<label>
	    		<input type="radio" name="radio" value="2">Southbound
	    	</label>
    	</form>
    </div>
    <a class="btn btn-small btn-info" href="{{ URL::to('depart') }}">DEPART</a>

</div>
@endsection