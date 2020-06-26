@extends('layouts.app')

@section('content')
    <div class="container-scroller">

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_sidebar.html -->
                @include('.layouts.sidebar')
                <!-- partial -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-warning text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-normal mb-3">All Books</h4>
                                    <h2 class="font-weight-normal mb-5">{{ \App\Models\Book::all()->count() }} piece</h2>
                                    <p class="card-text">Week stat : Good</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-normal mb-3">All Service Holders</h4>
                                    <h2 class="font-weight-normal mb-5">{{ \App\Models\ServiceHolder::all()->count() }} person</h2>
                                    <p class="card-text">Week stat : Bad</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-normal mb-3">Completed Transactions</h4>
                                    <h2 class="font-weight-normal mb-5">50</h2>
                                    <p class="card-text">Week stat : Good</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Updates</h4>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center mr-4 text-muted">
                                            <i class="mdi mdi-account icon-sm mr-2"></i>
                                            <span>Joy Kumar Pal</span>
                                        </div>
                                        <div class="d-flex align-items-center text-muted">
                                            <i class="mdi mdi-calendar-blank icon-sm mr-2"></i>
                                            <span>October 3rd, 2018</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 pr-1">
                                            <img src="{{ asset('images/dashboard/img_1.jpg') }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 align-items-top">
                                        <img src="images/faces/face3.jpg" class="img-sm rounded-circle mr-3" alt="image">
                                        <div class="mb-0 flex-grow">
                                            <p class="font-weight-bold mr-2 mb-0">Jack Manque</p>
                                            <p>This is amazing! We have moved to a brand new office in
                                                New Hampshire with a lot more space.
                                                We will miss our old office but we are very excited about our new space.</p>
                                        </div>
                                        <div class="ml-auto">
                                            <i class="mdi mdi-heart-outline text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Recent Book </h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                   Book Id
                                                </th>
                                                <th>
                                                    Book Name
                                                </th>
                                                <th>
                                                    Assignee By
                                                </th>
                                                <th>
                                                    Book Author
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                <th>
                                                    Last Update
                                                </th>
                                                <th>
                                                    Book Price
                                                </th>
                                                <th>
                                                    Is Negotiable
                                                </th>
                                            </tr>
                                            </thead>
                                            @if(\App\Models\Book::all()->count() > 0)
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        5669
                                                    </td>
                                                    <td>
                                                        Fund is not recieved
                                                    </td>
                                                    <td class="py-1">
                                                        <img src="images/faces/face1.jpg" class="mr-2" alt="image">
                                                        David Grey
                                                    </td>
                                                    <td>
                                                        <label class="badge badge-gradient-success">DONE</label>
                                                    </td>
                                                    <td>
                                                        Dec 5, 2017
                                                    </td>
                                                    <td>
                                                        WD-12345
                                                    </td>
                                                    <td>
                                                        <i class="mdi mdi-arrow-up text-danger icon-sm mr-1"></i>High
                                                    </td>
                                                </tr>
                                                </tbody>

                                            @else
                                               <div class="text-center">
                                                   <p class="text-center text-danger">
                                                       No Books is added yet.
                                                   </p>
                                               </div>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Recent StackHolders</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                   SH Id
                                                </th>
                                                <th>
                                                    SH Name
                                                </th>
                                                <th>
                                                    SH Image
                                                </th>
                                                <th>
                                                    Assignee By
                                                </th>
                                                <th>
                                                    SH Email
                                                </th>
                                                <th>
                                                    Last Update
                                                </th>
                                                <th>
                                                    SH Contact
                                                </th>

                                            </tr>
                                            </thead>

                                            @if(\App\Models\ServiceHolder::all()->count() > 0)
                                                <tbody>
                                                @foreach(\App\Models\ServiceHolder::orderBy('created_at', 'desc')->paginate(10) as $serviceHolder)
                                                    <tr>
                                                        <td>
                                                            {{ $serviceHolder->id  }}
                                                        </td>
                                                        <td>
                                                            {{ $serviceHolder->sh_name }}
                                                        </td>
                                                        <td class="py-1">
                                                            <img src="images/faces/face1.jpg" class="mr-2" alt="image">
                                                        </td>
                                                        <td>
                                                            {{ \App\User::where('id', '=', $serviceHolder->user_id)->first()->name }}
                                                        </td>
                                                        <td>
                                                            {{ $serviceHolder->sh_email }}
                                                        </td>
                                                        <td>
                                                            {{ $serviceHolder->updated_at }}
                                                        </td>
                                                        <td>
                                                            {{ $serviceHolder->sh_phone_number}}
                                                        </td>

                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            @else
                                                <div class="text-center">
                                                    <p class="text-center text-danger">
                                                        No StakeHolder is added yet.
                                                    </p>
                                                </div>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- row-offcanvas ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
