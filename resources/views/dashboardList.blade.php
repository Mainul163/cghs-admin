@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="">
                    <h5 class="card-header"> <a href="{{url('csv-export')}}" class="btn  btn-primary sdbtn"
                            style="float:right;">Export CSV</a> Table Caption</h5>

                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <caption class="ms-4">
                                List of Projects
                            </caption>
                            <thead class=''>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Batch</th>
                                    <th>Mobile Number</th>


                                    <th>T-Shirt Size</th>

                                    <th>Guest</th>
                                    <th>Total</th>
                                    <th>Transaction Number</th>
                                    <th>Transaction id</th>
                                    <th>Registration Date</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brotherhood as $row)
                                <tr>

                                    <td>{{$row->id+1110000}}</td>
                                    <td>{{$row->graduated_name}}</td>
                                    <td>{{$row->batch}}</td>
                                    <td>{{$row->mobile_number}}</td>


                                    <td>{{$row->t_shirt}}</td>


                                    <td>{{$row->guest}}</td>
                                    <td>{{$row->total}}</td>
                                    <td>{{$row->bkash}}</td>
                                    <td>{{$row->transaction_id}}</td>
                                    <td>{{$row->date}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{route('dashboardList.edit',$row->id)}}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="{{route('status',$row->id)}}"><i
                                                        class="fa-solid fa-person-circle-check me-1"></i> approved</a>
                                                <a class="dropdown-item" href="{{route('pdf',$row->id)}}"><i
                                                        class="fa-regular fa-file-pdf me-1"></i>PDF</a>



                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
table thead tr th {
    font-weight: bold !important;
    color: #000;
    font-size: 14px !important;
    font-family: 'Poppins', sans-serif;
}
</style>

@endsection