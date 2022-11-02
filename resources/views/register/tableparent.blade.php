@extends('layouts.parent')

@section('container')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Selamat Datang Parents</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Sur Name</th>
                                            <th>IC</th>
                                            <th>Passport</th>
                                            <th>Birthday</th>
                                            <th>Email</th>
                                            <th>No. Phone</th>
                                            <th>No. Alt Phone</th>
                                            <th>Gender</th>
                                            <th>Realtionship</th>
                                            <th>Races</th>
                                            <th>Address 1</th>
                                            <th>Address 2</th>
                                            <th>State</th>
                                            <th>Salary</th>
                                            <th>Consent</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Sur Name</th>
                                            <th>IC</th>
                                            <th>Passport</th>
                                            <th>Birthday</th>
                                            <th>Email</th>
                                            <th>No. Phone</th>
                                            <th>No. Alt Phone</th>
                                            <th>Gender</th>
                                            <th>Realtionship</th>
                                            <th>Races</th>
                                            <th>Address 1</th>
                                            <th>Address 2</th>
                                            <th>State</th>
                                            <th>Salary</th>
                                            <th>Consent</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {{-- @foreach($data as $items)
                                            <tr>
                                                <td>{{ $items->fp_name }}</td>
                                                <td>{{ $items->p_ic }}</td>
                                                <td>{{ $items->p_gender }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $items->fp_name2 }}</td>
                                                <td>{{ $items->p_ic2 }}</td>
                                                <td>{{ $items->p_gender2 }}</td>
                                            </tr>
                                        @endforeach --}}
                                        <tr>
                                            <td>SAYA</td>
                                            <td>SUKA</td>
                                            <td>MAKAN</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Smart School</div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection

