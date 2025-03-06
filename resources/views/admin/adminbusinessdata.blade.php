@include('include.admincss')
@include('include.adminheader')

<!-- Include Bootstrap & DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
     --}}
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px; /* Adjust based on header height if fixed */
        }

        .container-custom {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 100%;
            margin-top: 80px; /* Ensuring it does not overlap with the header */
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
            overflow-x: hidden; /* Prevent horizontal scrolling */
            border-radius: 10px;
            background: white;
            padding: 10px;
            width: 100%;
        }

        .table {
            width: 100%;
            table-layout: auto; /* Allow table width to adjust dynamically */
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
    <h2 class="text-center mb-4">📊 Business Data</h2>
    
    <div class="table-container">
        <table id="DataTable" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Business Name</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Entity</th>
                    <th>Status</th>
                    <th>More Info</th>
                    <th>Financials</th>
                    <th>Documents</th>
                </tr>
            </thead>
            <tbody>
                @foreach($businessData as $business)
                <tr>
                    <td>{{ $business->id }}</td>
                    <td>{{ $business->business_name }}</td>
                    <td>{{ $business->city }}</td>
                    <td>{{ $business->business_category_id }}</td>
                    <td>{{ $business->year_established }}</td>
                    <td>{{ $business->entity_type }}</td>
                    <td>
                        <span class="badge bg-{{ $business->operational_status == 'Active' ? 'success' : 'danger' }}">
                            {{ $business->operational_status }}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#additionalInfoModal{{ $business->id }}">
                            ℹ️ View Info
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#financialModal{{ $business->id }}">
                            💰 View Financials
                        </button>
                    </td>   
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#photographModal{{ $business->id }}">
                            📂 View Documents
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@foreach($businessData as $business)
<!-- Additional Info Modal -->
<div class="modal fade" id="additionalInfoModal{{ $business->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">📌 Additional Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Products:</strong>
                        <span class="text-muted">{{ $business->additionalInfo->products ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Premises:</strong>
                        <span class="text-muted">{{ $business->additionalInfo->premises ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Other Premises:</strong>
                        <span class="text-muted">{{ $business->additionalInfo->other_premises ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Clientele:</strong>
                        <span class="text-muted">{{ $business->additionalInfo->clientele ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Details:</strong>
                        <span class="text-muted">{{ $business->additionalInfo->details ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Financial Info Modal -->
<div class="modal fade" id="financialModal{{ $business->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">💲 Financial Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Turnover:</strong>
                        <span class="text-muted">{{ $business->financial->turnover ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>EBITDA:</strong>
                        <span class="text-muted">{{ $business->financial->ebdita ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Transaction Type:</strong>
                        <span class="text-muted">{{ $business->financial->transaction_type ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Deal Size:</strong>
                        <span class="text-muted">{{ $business->financial->deal_size ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Deal Inclusions:</strong>
                        <span class="text-muted">{{ $business->financial->deal_inclusions ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Deal Rationale:</strong>
                        <span class="text-muted">{{ $business->financial->deal_rationale ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Deal Title:</strong>
                        <span class="text-muted">{{ $business->financial->deal_title ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="photographModal{{ $business->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">📌 Documents</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Images:</strong>
                        <span class="text-muted">{{ $business->photograph->images ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Company Documents:</strong>
                        <span class="text-muted">{{ $business->photograph->company_documents ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Financial Documents:</strong>
                        <span class="text-muted">{{ $business->photograph->financial_documents ?? 'N/A' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>License Documents:</strong>
                        <span class="text-muted">{{ $business->photograph->license_documents ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endforeach



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


