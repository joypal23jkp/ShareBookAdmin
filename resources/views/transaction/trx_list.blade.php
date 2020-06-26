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
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Transaction List </h4>
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
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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
