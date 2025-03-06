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

        .container-custom {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    width: 90%;
    margin: 80px auto;
    position: relative;
    overflow: hidden; /* Prevents unnecessary overflow */
    display: flex;
    flex-direction: column;
}

/* Ensuring the table container is scrollable */
.table-container {
    width: 100%;
    overflow-x: auto;
    overflow-y: auto;
    max-height: 400px; /* Ensures vertical scrolling when needed */
}

/* Ensuring table remains responsive */
.table {
    width: 100%;
    min-width: 1000px; /* Ensures horizontal scrolling if content overflows */
    table-layout: auto;
}

/* Making the container itself scrollable when needed */
@media screen and (max-width: 1024px) {
    .container-custom {
        width: 95%;
    }

    .table {
        min-width: 800px;
    }
}

@media screen and (max-width: 768px) {
    .container-custom {
        width: 98%;
        overflow-x: auto;
        overflow-y: auto;
        max-height: 450px; /* Ensures vertical scrolling */
    }

    .table {
        min-width: 700px;
    }
}

@media screen and (max-width: 480px) {
    .container-custom {
        width: 100%;
        overflow-x: auto;
        overflow-y: auto;
        max-height: 400px;
    }

    .table {
        min-width: 600px;
    }

    th, td {
        font-size: 14px;
    }
}

    </style>
</head>
<body>

<div class="container-custom container-fluid px-3" id="main-container">
    <h2 class="text-center mb-4">Contact Details</h2>
    
    <div class="table-container">
        <table id="DataTable" class="table table-hover table-striped table-bordered">
            <thead>
                
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Subject</th>
                    <th>Messages</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->fname }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->comment }}</td>
                    <td class="text-center">
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </td>
                    
                    
                    <td class="text-center">
                        <form action="{{ route('contactsdelete', $contact->id) }}" method="POST" 
                            onsubmit="return confirm('Are you sure you want to delete this contact?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
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


