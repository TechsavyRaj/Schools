@extends('layouts.app')

@section('content')

<br><br>
<div class="row">
    <div class="float">
        <h1 class="float-start"><u> Show Schools </u></h1>
        <a href="/" class="btn btn-primary float-end">Add School</a>
    </div>

    <br>

    @foreach ($schools as $school)
    <div class="col-md-3">
        <div class="school-card">
            <div class="school-tumb">
                <img src="school_images/{{$school->image}}" alt="school">
            </div>
            <div class="school-details">
                <span class="school-catagory">{{$school->city}}</span>
                <h4><a href="#">{{$school->name}}</a></h4>
                <p>{{$school->address}}</p>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
