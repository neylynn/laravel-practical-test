@extends('customers.layout')
  
@section('content')
<style>
    .hide{
        display:none;
    }
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class="card" style="width:100%; margin-top:20px;">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="display:flex">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <div class="checkbox form-inline">
                        <label><input type="checkbox" name="ch_name[]" value="ch01"><strong>&nbsp;&nbsp;Name</strong></label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control ch_for hide">
                    </div>
                    @if($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <div class="checkbox form-inline">
                        <label><input type="checkbox" name="ch_name[]" value="ch01"><strong>&nbsp;&nbsp;Phone Number</strong></label>
                        <input type="text" name="phone" placeholder="Enter Phone Number"  class="form-control ch_for hide">
                    </div>
                    @if($errors->has('phone'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <div class="checkbox form-inline">
                        <label><input type="checkbox" name="ch_name[]" value="ch01"><strong>&nbsp;&nbsp;Date of birth</strong></label>
                        <input type="text" id="datepicker" name="dob" placeholder="Choose Date of birth"  class="form-control ch_for_dob hide">
                    </div>
                    @if($errors->has('dob'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <div class="checkbox form-inline">
                        <label><input type="checkbox" name="ch_name[]" value="ch01"><strong>&nbsp;&nbsp;Gender</strong></label>
                        <div class="col-md-3 ch_for hide">
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-md-4" style="display:flex; margin-top:5px;">
                                        <div style="margin-left:5px;">
                                            <input type="radio" class="form-check-input mr-3" name="gender" value="0">
                                            <label class="form-check-label">Male</label>
                                        </div>
                                        <div style="margin-left:35px;">
                                            <input type="radio" class="form-check-input mr-3" name="gender" value="1">
                                            <label class="form-check-label">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($errors->has('gender'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(document).ready(function () {
        $('.checkbox input:checkbox').on('click', function(){
            $(this).closest('.checkbox').find('.ch_for').toggle();
        })

        $('.checkbox input:checkbox').on('click', function(){
            $(this).closest('.checkbox').find('.ch_for_dob').toggle();
            $( "#datepicker" ).datepicker();
        })
    });
</script>
@endsection