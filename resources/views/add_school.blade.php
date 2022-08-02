@extends('layouts.app')

@section('content')
<br>
    <div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">







        <div class="card">
            <div class="card-header text-center">
                <h2>Add Schools</h2>
            </div>

            <div class="card-body">
                @if ($message = Session::get('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
                </ul>
               </div>
              @endif
              <form action="add_school" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Name input -->
                <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control" required/>
                </div>
                <!-- Address input -->
                <div class="form-group">
                    <label class="form-label" for="address">Address</label>
                  <input type="text" id="address" name="address" class="form-control" required/>
                </div>
                <!-- City input -->
                <div class="form-group">
                    <label class="form-label" for="city">City</label>
                  <input type="text" id="city" name="city" class="form-control" required/>
                </div>
                <!-- State input -->
                <div class="form-group">
                    <label class="form-label" for="state">State</label>
                  <input type="text" id="state" name="state" class="form-control" required/>
                </div>
                <!-- Contact input -->
                <div class="form-group">
                    <label class="form-label" for="contact">Contact</label>
                  <input type="number" id="contact" name="contact" class="form-control" required/>
                </div>
                <!-- Email input -->
                <div class="form-group">
                    <label class="form-label" for="email">Email ID</label>
                  <input type="email" id="email" name="email" class="form-control" required/>
                </div>
                <div class="form-group mb-3">
                    <label>Image(Within 5MB)</label>
                    <div class="input-group">
                        <input type="file" name="image" accept="image/*" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload" >
                    </div>
                </div>
                <div class="form-group">
                    <a href="show_schools" class="btn btn-secondary float-start">Show Schools</a>
                    <button type="submit" class="btn btn-primary float-end">Add School</button><br>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection
