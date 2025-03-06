<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Data</title>
    
    <!-- Include Bootstrap & DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS (for modal functionality) -->

</head>
<body>

<div class="container mt-4">
    <h2 class="text-center">Business Data</h2>
    
    <table id="DataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Business Name</th>
                <th>City</th>
                <th>Category</th>
                <th>Year Established</th>
                <th>Products</th>
                <th>Turnover</th>
                <th>EBITDA</th>
                <th>Deal Size</th>
            </tr>
        </thead>
        <tbody>
            @foreach($businessData as $business)
            <tr>
                <td>{{ $business->id }}</td>
                <td>{{ $business->business_name }}</td>
                <td>{{ $business->city }}</td>
                <td>{{ $business->business_category }}</td>
                <td>{{ $business->year_established }}</td>
                <td>{{ optional($business->additionalInfo)->products }}</td>
                <td><!-- Button to Open Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#businessModal">
                        View Business Details
                    </button>
                    </td>
                <td>{{ optional($business->financial)->ebitda }}</td>
                <td>{{ optional($business->financial)->deal_size }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Bootstrap Modal -->
<div class="modal fade" id="businessModal" tabindex="-1" aria-labelledby="businessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="businessModalLabel">Business Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Business Name:</strong> Sample Business</p>
                <p><strong>City:</strong> New York</p>
                <p><strong>Category:</strong> Technology</p>
                <p><strong>Year Established:</strong> 2010</p>
                <p><strong>Products:</strong> Software Solutions</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables Script -->
<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            "paging": true,      // Enable pagination
            "searching": true,   // Enable search box
            "ordering": true,    // Enable sorting
            "info": true         // Show table info
        });
    });
</script>

</body>
</html>
