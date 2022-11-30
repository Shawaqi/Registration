@extends('layouts.edit')

@section('container')
    <div id="layoutSidenav_content" style="margin-top: 3em">
        <main>
            <div class="container-fluid px-4">
                @foreach ($user as $list)
                <form action="{{ route('updateparent', $list->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="step-one">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">Step 1 Guardian Details 1 / Maklumat Penjaga 1 (optional)</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">First Name</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" value="{{ $list->name }}" name="fp_name"  required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Middle Name</label>
                                                <input type="text" class="form-control" value="{{ $list->mname }}" name="sp_name"   >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Surname</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" value="{{ $list->sname }}" name="tp_name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Relationship</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" placeholder="Penjaga/ Parents" name="relationship" maxlength="6"   >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Identification Number</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" placeholder="111111223333"  maxlength="12" name="p_ic"   >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Passport Number</label>
                                                <input type="text" class="form-control" placeholder=""  name="passport" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Date Of Birth</label><span style="color: brown">*</span>
                                                <input type="datetime" class="form-control" placeholder="" name="pdob" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Email</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" value="{{ $list->email }}" name="p_email" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Phone</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" placeholder="01111111111" name="p_phone" maxlength="11"  >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for=""> Alt Phone</label>
                                                <input type="text" class="form-control" placeholder="0132555476" name="pa_phone" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="gender">Gender</label><span style="color: brown">*</span>
                                                <select class="form-select" aria-label="Disabled select example" enabled name="p_gender"  >
                                                    <option selected>Open this select menu</option>
                                                    <option value="Lelaki">Lelaki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="race">Races</label><span style="color: brown">*</span>
                                                <select class="form-select" aria-label="Disabled select example" enabled name="p_races"  >
                                                        <option value="Melayu">Melayu</option>
                                                        <option value="Iban">Iban</option>
                                                        <option value="Kadazan">Kadazan</option>
                                                        <option value="Dusun">Dusun</option>
                                                        <option value="Dayak">Dayak</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Address 1</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" placeholder="LOT314 " name="p_address1"  >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Address 2</label>
                                                <input type="text" class="form-control" placeholder="Jalan Gemilang" name="p_address2" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">State</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" placeholder="KUALA LUMPUR" name="p_state" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Poskod</label><span style="color: brown">*</span>
                                                <input type="text" class="form-control" placeholder="48000" name="p_poskod" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </main>
    </div>
@endsection
