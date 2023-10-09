@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">Order List</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th class="center">Order Id</th>
                        <th class="end">Amount</th>
                        <th class="center">Payment Status</th>
                        <th class="center">Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>

            <ul class="pagination">
                <li class="pagination-link">
                    <a href="#">
                        <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="17"
                            height="17"
                            viewBox="0 0 17 17"
                        >
                            <g></g>
                            <path
                                d="M16 8.972h-12.793l6.146 6.146-0.707 0.707-7.353-7.353 7.354-7.354 0.707 0.707-6.147 6.147h12.793v1z"
                                fill="#000000"
                            />
                        </svg>
                    </a>
                </li>
                <li class="pagination-link">
                    <a href="#" class="active">1</a>
                </li>
                <li class="pagination-link"><a href="#">2</a></li>
                <li class="pagination-link"><a href="#">3</a></li>
                <li class="pagination-link"><a href="#">4</a></li>
                <li class="pagination-link">
                    <a href="#">
                        <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="17"
                            height="17"
                            viewBox="0 0 17 17"
                        >
                            <g></g>
                            <path
                                d="M15.707 8.472l-7.354 7.354-0.707-0.707 6.146-6.146h-12.792v-1h12.793l-6.147-6.148 0.707-0.707 7.354 7.354z"
                                fill="#000000"
                            />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </section>


@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection


