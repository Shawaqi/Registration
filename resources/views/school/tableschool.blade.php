@extends('layouts.school')

@section('container')

    <div id="layoutSidenav_content"  style="margin-top: 3em">
        <main>
            <div class="container-fluid px-4">
                <h1 style="text-align: center"> List of Schools Data </h1>
                <br>
                <div class="row">
                    <div class="col-md-3 col-lg-3 mb-3">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <a href="{{ route('tableP') }}">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    <img class="img-fluid" src="{{ asset('assets/p.png') }}" title="Parents/Guardians/Students" />
                                    {{-- <p style="text-align: center">Parents/Guardians and Students</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-3 col-lg-3 mb-3">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <a href="{{ route('tableS') }}">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    <img class="img-fluid" src="{{ asset('assets/s.png') }}" title="Staffs" />
                                    {{-- <p style="text-align: center">Staff School</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-3 col-lg-3 mb-3">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <a href="{{ route('tableM') }}">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    <img class="img-fluid" src="{{ asset('assets/m.png') }}" title="Merchants" />
                                    {{-- <p style="text-align: center">Merchant School</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                    {{-- <div class="shadow p-3 mb-5 bg-white rounded">
                        <div class="p-6 flex space-x-2">
                            <div class="flex-10">
                                <div class="flex justify-between items-center">
                                    <h1> HAI </h1>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </main>
    </div>
@endsection
