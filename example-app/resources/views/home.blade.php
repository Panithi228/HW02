@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="card card-primary">
        <!-- Content Header (Page header) -->
        <div class="card-header">
            <h3 class="card-title">SE CAMP FORM</h3>
        </div>
        <div class="card-body">
            <!-- Name -->
            <div class="form-group">
                <label for="exampleInputFirst_Name">First Name :</label>
                <input type="FName" class="form-control" id="exampleInputFirst_Name " placeholder="examplefirstname">
            </div>
            <div class="form-group">
                <label for="exampleInputLast_Name">Last Name :</label>
                <input type="LName" class="form-control" id="exampleInputLast_Name" placeholder="examplelastname">
            </div>
            <!-- Date mm/dd/yyyy -->
            <div class="form-group">
                <label>Date of birth :</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    <input type="date" class="form-control" id="birthdayinput" placeholder="mm-dd-yyyy">
                </div>
            </div>
            <!-- Age -->
            <div>
                <div class="form-group">
                    <label>Age :</label>
                    <input type="number" class="form-control" id = "ageinput" placeholder="Enter" min="5" max="100">

                </div>
            </div>
            <!-- Gender -->
            <div class="form-group">
                <div> <label>SEX :</label>
                    <br>
                    <input id="radio_a" type="radio" name="same_radio" />
                    <label for="radio_a"><b class="CO">Male</b></label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                    <input id="radio_b" type="radio" name="same_radio" />
                    <label for="radio_b"><b class="CO">Female</b></label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                    <input id="radio_c" type="radio" name="same_radio" />
                    <label for="radio_c"><b class="CO">Others</b></label>
                </div>
            </div>
            <!-- Pic -->
            <div class="form-group">
                <label for="exampleInputFile">Picture</label>
                <div class="input-group">
                        <input type="file" class="custom-file-input" id="InputFile">
                        <label class="custom-file-label">Choose file</label>
                </div>
            </div>
            <!-- Address -->
            <div class="form-group">
                <label>Address :</label>
                <textarea class="form-control" rows="3" placeholder="Enter"></textarea>
            </div>
            <!-- color -->
            <div class="form-group">
                <label>Favorite color :</label>
                <div class="input-group">
                    <SELECT class="form-control">
                        <OPTION SELECTED>Choose favorite color
                        <OPTION VALUE=1>Red
                        <OPTION VALUE=2>Black
                        <OPTION VALUE=3>White
                        <OPTION VALUE=4>Blue
                        <OPTION VALUE=5>Yellow
                        <OPTION VALUE=6>Purple
                        <OPTION VALUE=7>Green
                        <OPTION VALUE=8>None
                    </SELECT>
                </div>
            </div>
            <!-- phone mask -->
            <div class="form-group">
                <label>Phone number :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="xxx-xxx-xxxx">
                </div>
                <!-- /.input group -->
            </div>
            <div class = "form-group">
                <label>Favorite song genre :</label>
                <br>
                <input id="radio_a" type="radio" name="same_radio" />
                    <label for="radio_a"><b class="CO">Pop</b></label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                    <input id="radio_b" type="radio" name="same_radio" />
                    <label for="radio_b"><b class="CO">Classical</b></label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                    <input id="radio_a" type="radio" name="same_radio" />
                    <label for="radio_a"><b class="CO">Country</b></label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                    <input id="radio_b" type="radio" name="same_radio" />
                    <label for="radio_b"><b class="CO">Electronic</b></label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                    <input id="radio_b" type="radio" name="same_radio" />
                    <label for="radio_b"><b class="CO">Other</b></label>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-body">
            <div class="card-footer">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Confirm information</label>
                </div>
                <div>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
      <!-- /.content -->
@endsection
