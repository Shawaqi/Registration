@extends('layouts.staff')

@section('container')

    <div id="layoutSidenav_content"  style="margin-top: 3em">
        <main>
            <div class="container-fluid px-4">
                <form enctype="multipart/form-data" action="" method="POST">
                    @csrf
                    <div class="step-3">
                        <div class="card">
                            <div class="card-header bg-dark text-white" style="text-align:center ;">STAFF FORM</div>
                            <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Full Name :</label><span style="color: brown">*</span>
                                                    <input type="text" class="form-control" placeholder="" id="nama" name="nama" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email :</label><span style="color: brown">*</span>
                                                    <input type="text" class="form-control" placeholder="" id="emel" name="emel" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Birthday :</label>
                                                    <input type="date" class="form-control" placeholder="" id="lahir" name="lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Address :</label>
                                                    <input type="text" class="form-control" placeholder="" id="alamat" name="alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Postal Code :</label>
                                                    <input type="text" class="form-control" placeholder="" id="poskod" name="poskod" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">State :</label>
                                                    <select  id="negeri-dds" class="form-control" name="negeri">
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
                                                    <select id="daerah-dds" class="form-control" name="daerah">
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name of School :</label>
                                                    <select id="sekolah-dds" class="form-control" name="sekolah">
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Phone :</label>
                                                    <input type="text" class="form-control" placeholder="" id="nombor" name="nombor" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Categories :</label>
                                                    <select type="text" class="form-control" placeholder="" id="kate" name="kate" required>
                                                        <option></option>
                                                        <option>Cikgu</option>
                                                        <option>Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">NRIC :</label>
                                                    <input type="text" class="form-control" placeholder="" id="ic" name="ic" required>
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

    @push('script2')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
            $('#negeri-dds').on('change', function () {
                var negeri = this.value;
                $("#daerah-dds").html('');
                $.ajax({
                    url: "{{url('api/find-cities')}}",
                    type: "POST",
                    data: {
                        negeri: negeri,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#daerah-dds').html('<option value="">Select City</option>');
                        $.each(result.cities, function (key, value) {
                            $("#daerah-dds").append('<option value="' + value.daerah + '">' + value.daerah + '</option>');
                        });
                        $('#sekolah-dds').html('<option value="">Select School</option>');
                    }
                });
            });


                $('#daerah-dds').on('change', function () {
                    var daerah = this.value;
                    $("#sekolah-dds").html('');
                    $.ajax({
                        url: "{{url('api/find-schools')}}",
                        type: "POST",
                        data: {
                            daerah: daerah,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#sekolah-dds').html('<option value="">Select School</option>');
                            $.each(result.schools, function (key, value) {
                                $("#sekolah-dds").append('<option value="' + value.sekolah + '">' + value.sekolah + '</option>');
                            });
                        }
                    });
                });
            });
            </script>
    @endpush

@endsection
