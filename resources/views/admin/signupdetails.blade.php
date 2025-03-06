@include('include.admincss')
@include('include.adminheader')

<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px; 
        }

        .container-custom {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 100%;
            margin-top: 80px;
            position: relative;
        }

        h2 {
            color: #0d6efd;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table-container {
            max-height: 400px;
            overflow-y: auto;
            overflow-x: hidden;
            border-radius: 10px;
            background: white;
            padding: 10px;
            width: 100%;
        }

        .table {
            width: 100%;
            table-layout: auto; 
        }

        .table th {
            background-color: #0d6efd !important;
            color: white;
            text-transform: uppercase;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }
    </style>
</head>
<body>

<div class="container-custom container-fluid px-3" id="main-container">
    <h2 class="text-center mb-4"> Signup details</h2>
    
    <div class="table-container">
        <table id="DataTable" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone No</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($signupData as $signup)
                <tr>
                    <td>{{ $signup-> }}</td>
                    <td>{{ $signup-> }}</td>
                    <td>{{ $signup-> }}</td>
                    <td>{{ $signup-> }}</td>
                    <td>{{ $signup-> }}</td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>



<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            "scrollX": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "paging": false,
            "scrollCollapse": true
        });
    });

    function toggleSidebar() {
        const container = document.getElementById('main-container');
        container.classList.toggle('container-fluid');
        container.classList.toggle('container');
    }
</script>
@include('include.adminjs') 


