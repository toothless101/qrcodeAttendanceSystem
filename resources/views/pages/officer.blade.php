@extends('layout.app')
@section('title', 'PaScan | Officers')

@section('content')

<link rel="stylesheet" href="{{ asset('css/pages-css/officers.css') }}">
@include('partials.sidebar')
<x-header-section>
    Officers
</x-header-section>

    <section id="main" class="main">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- New Officer Button -->
            <button class="btn btn-new-officer" data-bs-toggle="modal" data-bs-target="#addOfficerModal">
                + New Officer
            </button>

        
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="officer-table mt-5">
            <table id="officer-datatable" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Edit</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody id="assigned_officer">
                <tr>
                    <td id="name-clm">Hilary Mae Poralan</td>
                    <td>VIce President</td>
                    <td>VIce President</td>
                    <td>VIce President</td>
                </tr>

            </tbody>
        </table>
        </div>
        <!--TABLE-->
        
        


    </section>
    
@include('posts.officer-modals.add-officer-modal') 

    

<script>
    $(document).ready(function(){
        $('#officer-datatable').DataTable({
            dom: 'lt<"d-flex justify-content-between mt-2"<"table-info"i><"table-pagination"p>>r', 
            language:{
                lengthMenu: "Show _MENU_ entries"
            }      
        });

        $('.search-input').on('keyup', function(){
            $('#officer-datatable').DataTable().search(this.value).draw();
        });
    });
</script>
@endsection


