
            <div style="margin-top: 3em" class="container">
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <h2 style="text-align: center">Form Parents/Guradians & Students</h2>
                            <form enctype="multipart/form-data" method="POST" action="">
                                @csrf

                                {{--step1--}}
                                {{-- @if ($currentStep == 1) --}}
                                <div class="step-one ">
                                    <div class="card">
                                        <div class="card-header bg-secondary text-white">Step 1 Guardian Details 1 / Maklumat Penjaga 1 (optional)</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">First Name</label><span style="color: brown">*</span>
                                                        <input type="text" class="form-control" placeholder="First Name" name="fp_name"  required >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Middle Name</label>
                                                        <input type="text" class="form-control" placeholder="Middle Name" name="sp_name"  required >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Surname</label><span style="color: brown">*</span>
                                                        <input type="text" class="form-control" placeholder="Surname" name="tp_name" >

                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Relationship</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="Penjaga/ Parents" name="relationship" maxlength="6"  required >

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Identification Number</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="111111223333"  maxlength="12" name="p_ic"  required >

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
                                                            <input type="date" class="form-control" placeholder="" name="pdob" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Email</label><span style="color: brown">*</span>
                                                            <input type="email" class="form-control" placeholder="anything@gmail.com" name="p_email" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Phone</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="01111111111" name="p_phone" maxlength="11"  required>
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

                                                            <select class="form-select" aria-label="Disabled select example" enabled name="p_gender"  required>
                                                                <option selected>Open this select menu</option>
                                                                <option value="Lelaki">Lelaki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="race">Races</label><span style="color: brown">*</span>
                                                            <select class="form-select" aria-label="Disabled select example" enabled name="p_races"  required>
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
                                                            <input type="text" class="form-control" placeholder="LOT314 " name="p_address1"  required>
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
                                {{-- @endif --}}


                                {{--step 2--}}

                                <br>

                                {{-- @if ($currentStep == 2) --}}
                                <div class="step-two ">
                                    <div class="card">
                                        <div class="card-header bg-secondary text-white">Step 2 Guardian Details 2 / Maklumat Penjaga 2 (optional)</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">First Name</label><span style="color: brown">*</span>
                                                        <input type="text" class="form-control" placeholder="First Name" name="fp_name2"  required >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Middle Name</label>
                                                        <input type="text" class="form-control" placeholder="Middle Name" name="sp_name2"  required >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Surname</label><span style="color: brown">*</span>
                                                        <input type="text" class="form-control" placeholder="Surname" name="tp_name2" >

                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Relationship</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="Penjaga/ Parents" name="relationship2" maxlength="6"  required >

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Identification Number</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="111111223333"  maxlength="12" name="p_ic2"  required >

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Passport Number</label>
                                                            <input type="text" class="form-control" placeholder=""  name="passport2" >

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Date Of Birth</label><span style="color: brown">*</span>
                                                            <input type="date" class="form-control" placeholder="" name="pdob2" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Email</label><span style="color: brown">*</span>
                                                            <input type="email" class="form-control" placeholder="anything@gmail.com" name="p_email2" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Phone</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="01111111111" name="p_phone2" maxlength="11"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for=""> Alt Phone</label>
                                                            <input type="text" class="form-control" placeholder="0132555476" name="pa_phone2" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label><span style="color: brown">*</span>

                                                            <select class="form-select" aria-label="Disabled select example" enabled name="p_gender2"  required>
                                                                <option selected>Open this select menu</option>
                                                                <option value="Lelaki">Lelaki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="race">Races</label><span style="color: brown">*</span>
                                                            <select class="form-select" aria-label="Disabled select example" enabled name="p_races2"  required>
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
                                                            <input type="text" class="form-control" placeholder="no .." name="p_address12"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Address 2</label>
                                                            <input type="text" class="form-control" placeholder="Jalan Gemilang " name="p_address22" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">State</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="KUALA LUMPUR" name="p_state2" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Poskod</label><span style="color: brown">*</span>
                                                            <input type="text" class="form-control" placeholder="48000" name="p_poskod2" >
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}



                                {{--step 3 student --}}
                                <br>
                                {{-- @if ($currentStep == 3) --}}
                                <div class="step-3">
                                    <div class="card">
                                        <div class="card-header bg-secondary text-white">step 3 Student Details/Maklumat Murid </div>
                                        <div class="card-body">
                                            @foreach ($students as $index => $student)
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">First Name</label><span style="color: brown">*</span>
                                                                <input type="text" class="form-control" placeholder="First Name" wire:model="students.{{$index}}.fs_name" name="students[{{$index}}][fs_name]">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Middle Name</label><span style="color: brown">*</span>
                                                                <input type="text" class="form-control" placeholder="Middle Name"wire:model="students.{{$index}}.ss_name" name="students[{{$index}}][ss_name]">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Surname</label>
                                                                <input type="text" class="form-control" placeholder="Surname" wire:model="students.{{$index}}.ts_name" name="students[{{$index}}][ts_name]">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Races</label><span style="color: brown">*</span>

                                                                    <select class="form-select" aria-label="Disabled select example" enabled wire:model="students.{{$index}}.s_races" name="students[{{$index}}][s_races]">
                                                                        <option selected>...</option>
                                                                        <option value="MELAYU">MELAYU</option>
                                                                        <option value="INDIA">INDIA</option>
                                                                        <option value="CINA">CINA</option>
                                                                        <option value="IBAN">IBAN</option>
                                                                        <option value="KADAZAN">KADAZAN</option>
                                                                        <option value="DUSUN">DUSUN</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Gender</label><span style="color: brown">*</span>

                                                                    <select class="form-select" aria-label="Disabled select example" enabled wire:model="students.{{$index}}.s_gender" name="students[{{$index}}][s_gender]">
                                                                        <option selected>...</option>
                                                                        <option value="Lelaki">Lelaki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Identification Number</label><span style="color: brown">*</span>
                                                                    <input type="text" class="form-control" placeholder="961001111111" wire:model="students.{{$index}}.ic_student" name="students[{{$index}}][ic_student]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Phone</label><span style="color: brown">*</span>
                                                                    <input type="text" class="form-control" placeholder="0135443246" wire:model="students.{{$index}}.sno_tel" name="students[{{$index}}][sno_tel]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for=""> Date of Birth</label><span style="color: brown">*</span>
                                                                    <input type="date" class="form-control" placeholder="" wire:model="students.{{$index}}.s_dob" name="students[{{$index}}][s_dob]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">email</label><span style="color: brown">*</span>
                                                                    <input type="email" class="form-control" placeholder="anything@gmail.com" wire:model="students.{{$index}}.s_email" name="students[{{$index}}][s_email]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>State</label><span style="color: brown">*</span>
                                                                    <input type="text" id="state-dd" class="form-control" wire:model="students.{{$index}}.s_state" name="students[{{$index}}][s_state]" >
                                                                        {{-- <option>Select Country</option> --}}
                                                                            {{-- @foreach ($assets as $asset)
                                                                                <option value="{{$asset->negeri}}">
                                                                                    {{$asset->negeri}}
                                                                                </option>
                                                                            @endforeach --}}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">City</label><span style="color: brown">*</span>
                                                                    <input type="text" id="city-dd" class="form-control" wire:model="students.{{$index}}.s_city" name="students[{{$index}}][s_city]" >
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">School</label><span style="color: brown">*</span>
                                                                    <input type="text" id="school-dd" class="form-control" wire:model="students.{{$index}}.s_school" name="students[{{$index}}][s_school]">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <hr>
                                            <button type="button" class="btn btn-md btn-danger"  wire:click.prevent="deletestudent({{$index}})">remove</button>
                                            <hr>
                                            @endforeach
                                            <button type="button" class="btn btn-md btn-secondary"  wire:click.prevent="add">Add Student</button>
                                            More Student(S) <span id="number-of-student"></span>

                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}


                                <br>
                                {{--step 4--}}
                                {{-- @if ($currentStep == 4) --}}
                                <div class="step-4">
                                    <div class="card">
                                        <div class="card-header bg-secondary text-white">Step 4 Monthly Income/Pendapatan Bulanan </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <p>Please choose your Household Monthly Income</p>
                                                        <!-- Default radio -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gaji"  id="flexRadioDefault1" value=" Below RM 4,850 Per Month" />
                                                            <label class="form-check-label" for="flexRadioDefault1" ><p> Below RM 4,850 Per Month </label></p>
                                                        </div>
                                                        <!-- Default checked radio -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gaji"  id="flexRadioDefault2" value="Between RM 4,851 - RM10,970 Per Month" />
                                                            <label class="form-check-label" for="flexRadioDefault2"><p> Between RM 4,851 - RM10,970 Per Month </label></p>
                                                        </div>
                                                        <!-- Default radio -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gaji"  id="flexRadioDefault1" value="Above Rm10,971 Per Month" />
                                                            <label class="form-check-label" for="flexRadioDefault1"><p> Above Rm10,971 Per Month</label></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}
                                <br>

                                {{--step 5--}}
                                {{-- @if ($currentStep == 5) --}}
                                <div class="step-5">
                                    <div class="card">
                                        <div class="card-header bg-secondary text-white">Consent Form / Term And Conditions </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"  name="consent"  value="SETUJU">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                <p>By clicking and sending this informtion, i hereby <b>Agree</b> to all the terms and conditions.
                                                                    <a href="" style="color: red" ><b>CLICK HERE</b> </a>for the terms and conditions.</p>
                                                                    <p>Dengan menekan dan menghantar maklumat ini, Saya dengan ini <b>Bersetuju</b>  dengan terma dan syarat
                                                                    Tekan <a href='' style="color: red">
                                                                    <b>DI SINI</b>
                                                                    </a> untuk terma dan syarat</p>
                                                            </label>
                                                        <tr> </tr>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                                {{-- @endif --}}





                                <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

                                    {{-- @if ($currentStep == 1)
                                        <div></div>
                                    @endif

                                    @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                                        <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
                                    @endif

                                    @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                                    @endif --}}

                                    {{-- @if ($currentStep == 5) --}}
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                    {{-- @endif --}}


                                </div>

                            </form>
                        </div>
                    </main>
                </div>
            </div>

