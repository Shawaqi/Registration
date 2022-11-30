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
                                Data Parents/Guardians
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
                                            <th>Function</th>
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
                                            <th>Function</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($user as $list)
                                            <tr>
                                                <td>{{ $list->name }}</td>
                                                <td>{{ $list->mname }}</td>
                                                <td>{{ $list->sname }}</td>
                                                <td>{{ $list->ic }}</td>
                                                <td>{{ $list->passport }}</td>
                                                <td>{{ $list->birthday }}</td>
                                                <td>{{ $list->email }}</td>
                                                <td>{{ $list->phone }}</td>
                                                <td>{{ $list->altphone }}</td>
                                                <td>{{ $list->gender }}</td>
                                                <td>{{ $list->relationship }}</td>
                                                <td>{{ $list->races }}</td>
                                                <td>{{ $list->address1 }}</td>
                                                <td>{{ $list->address2 }}</td>
                                                <td>{{ $list->state }}</td>
                                                <td>{{ $list->gaji }}</td>
                                                <td>{{ $list->consent }}</td>
                                                <td>
                                                    <a href="{{ route('editparent', $list->id) }}" class="text-black">
                                                        <button type="submit">Edit</button></a>
                                                    <br>
                                                    <form action="{{ route('deleteparent', $list->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure want to quit this job?!');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{ $list->fname2 }}</td>
                                                <td>{{ $list->mname2 }}</td>
                                                <td>{{ $list->sname2 }}</td>
                                                <td>{{ $list->ic2 }}</td>
                                                <td>{{ $list->passport2 }}</td>
                                                <td>{{ $list->birthday2 }}</td>
                                                <td>{{ $list->email2 }}</td>
                                                <td>{{ $list->phone2 }}</td>
                                                <td>{{ $list->altphone2 }}</td>
                                                <td>{{ $list->gender2 }}</td>
                                                <td>{{ $list->relationship2 }}</td>
                                                <td>{{ $list->races2 }}</td>
                                                <td>{{ $list->faddress }}</td>
                                                <td>{{ $list->saddress }}</td>
                                                <td>{{ $list->state2 }}</td>
                                                <td>{{ $list->gaji }}</td>
                                                <td>{{ $list->consent }}</td>
                                                <td>
                                                    <a href="{{ route('editparent', $list->id) }}" class="text-black">
                                                        <button type="submit">Edit</button></a>
                                                    <br>
                                                    <form action="{{ route('deleteparent', $list->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure want to quit this job?!');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Students
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple1">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Sur Name</th>
                                            <th>Races</th>
                                            <th>IC</th>
                                            <th>Birthday</th>
                                            <th>Email</th>
                                            <th>No. Phone</th>
                                            <th>State</th>
                                            <th>PPD</th>
                                            <th>School</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Sur Name</th>
                                            <th>Races</th>
                                            <th>IC</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Email</th>
                                            <th>No. Phone</th>
                                            <th>State</th>
                                            <th>PPD</th>
                                            <th>School</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {{-- @foreach($student as $item)
                                            <tr>
                                                <td>{{ $item->fname }}</td>
                                                <td>{{ $item->mname }}</td>
                                                <td>{{ $item->sname }}</td>
                                                <td>{{ $item->races }}</td>
                                                <td>{{ $item->ic }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>{{ $item->birthday }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->state }}</td>
                                                <td>{{ $item->ppd }}</td>
                                                <td>{{ $item->school }}</td>
                                            </tr>
                                        @endforeach --}}
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

