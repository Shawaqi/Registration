@extends('layouts.merchant')

@section('container')

    <div id="layoutSidenav_content"  style="margin-top: 3em">
        <main>
            <div class="container-fluid px-4">
                <form enctype="multipart/form-data" action="" method="POST">
                    @csrf
                    <div class="step-3">
                        <div class="card">
                            <div class="card-header bg-dark text-white" style="text-align:center ;">MERCHANT FORM Kena Buat baru</div>
                            <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Full Name :</label><span style="color: brown">*</span>
                                                    <input type="text" class="form-control" placeholder="" id="fullname" name="fullname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email :</label><span style="color: brown">*</span>
                                                    <input type="text" class="form-control" placeholder="" id="email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Birthday :</label>
                                                    <input type="date" class="form-control" placeholder="" id="birthday" name="birthday" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Address :</label>
                                                    <input type="text" class="form-control" placeholder="" id="address" name="address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Postal Code :</label>
                                                    <input type="text" class="form-control" placeholder="" id="postal" name="postal" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label>State :</label>
                                                        <select  id="state-dd" class="form-control" name="state">
                                                            <option>Select Country</option>
                                                            @foreach ($list as $data)
                                                            <option value="{{$data->negeri}}">
                                                                {{$data->negeri}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">City/Town :</label>
                                                    <select id="city-dd" class="form-control" name="city">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name of School :</label>
                                                    <select id="school-dd" class="form-control" name="school">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Phone :</label>
                                                    <input type="text" class="form-control" placeholder="" id="phone" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Categories :</label>
                                                    <select type="text" class="form-control" placeholder="" id="cate" name="cate" required>
                                                        <option></option>
                                                        <option>Canteen</option>
                                                        <option>Cooperation</option>
                                                        <option>Book Store</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">NRIC :</label>
                                                    <input type="text" class="form-control" placeholder="" id="nric" name="nric" required>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <hr>
                            <p  style="text-align:right ;">Sila pastikan maklumat yang diisi adalah benar agar tidak memberi kesulitan pada pihak masing-masing. Terima Kasih &nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </p>
                        <hr>
                    </div>

                </form>
            </div>
        </main>
    </div>



    @push('script1')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
                $(document).ready(function () {
                $('#state-dd').on('change', function () {
                    var negeri = this.value;
                    $("#city-dd").html('');
                    $.ajax({
                        url: "{{url('api/find-cities')}}",
                        type: "POST",
                        data: {
                            negeri: negeri,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#city-dd').html('<option value="">Select City</option>');
                            $.each(result.cities, function (key, value) {
                                $("#city-dd").append('<option value="' + value.daerah + '">' + value.daerah + '</option>');
                            });
                            $('#school-dd').html('<option value="">Select School</option>');
                        }
                    });
                });


                $('#city-dd').on('change', function () {
                    var daerah = this.value;
                    $("#school-dd").html('');
                    $.ajax({
                        url: "{{url('api/find-schools')}}",
                        type: "POST",
                        data: {
                            daerah: daerah,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#school-dd').html('<option value="">Select School</option>');
                            $.each(result.schools, function (key, value) {
                                $("#school-dd").append('<option value="' + value.sekolah + '">' + value.sekolah + '</option>');
                            });
                        }
                    });
                });
            });
        </script>
    @endpush

@endsection
