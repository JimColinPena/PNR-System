@extends('layouts.main')
@section('content')

<h1>PNR TIMING</h1>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Alabang</td>
            <td>Sucat</td>
            <td>Bicutan</td>
            <td>FTI</td>
            <td>Nichols</td>
            <td>EDSA</td>
            <td>Pasay_Road</td>
            <td>Dela_Rosa</td>
            <td>Vito_Cruz/td>
            <td>San_Andres</td>
            <td>Paco</td>
            <td>Pandacan</td>
            <td>Sta_Mesa</td>
            <td>Espana</td>
            <td>Laon_Laon</td>
            <td>Bluementrit</td>
            <td>Tutuban</td>
        </tr>
    </thead>
    <tbody>
    @foreach($stations as $key => $value)
        <tr>
            <td>{{ $value->alabang }}</td>
            <td>{{ $value->sucat}}</td>
            <td>{{ $value->bicutan }}</td>
            <td>{{ $value->fti }}</td>
            <td>{{ $value->nichols }}</td>
            <td>{{ $value->edsa }}</td>
            <td>{{ $value->pasay_road }}</td>
            <td>{{ $value->dela_rosa }}</td>
            <td>{{ $value->vito_cruz }}</td>
            <td>{{ $value->san_andres }}</td>
            <td>{{ $value->paco }}</td>
            <td>{{ $value->pandacan }}</td>
            <td>{{ $value->sta_mesa }}</td>
            <td>{{ $value->espana }}</td>
            <td>{{ $value->laon_laon }}</td>
            <td>{{ $value->bluementrit }}</td>
            <td>{{ $value->tutuban }}</td>
        </tr>
    @endforeach



    </tbody>
</table>
@endsection