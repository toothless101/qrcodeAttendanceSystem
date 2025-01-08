@extends('layout.app')
@section('title', 'SSEA | Officer Home')
@section('content')

<link rel="stylesheet" href="{{ asset('css/student-officer-css/std_pages.css') }}">

@include('student-officers/stud-partials.std-sidebar')

<x-header-section>
    Events
</x-header-section>

<section id="main" class="main">
    <div class="d-flex justify-content-end align-items-center mb-3">

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search" id="search_bar">
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <table id="eventdataTable" class="display mt-5">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Type</th>
                <th>Date</th>
                <th>Time</th>
                <th>Officer Assigned</th>
            </tr>
        </thead>
        <tbody id="event-list">
            <tr>
                <td>1</td>
                <td>Intramurals</td>
                <td>Description</td>
                <td>Officer Name</td>
                <td>Officer Name</td>
            </tr>
        </tbody>
    </table> 
</section>

<script>
    $(document).ready(function () {
        $('#eventdataTable').DataTable({
            dom: 't<"d-flex justify-content-between mt-2"<"table-info"i><"table-pagination"p>>r',
            language: {
                lengthMenu: "Show _MENU_ entries"
            }
        });

        $('.search-input').on('keyup', function(){
            $('#eventdataTable').DataTable().search(this.value).draw();
        });

    });
</script>
@endsection