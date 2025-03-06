@include('include.admincss')
@include('include.adminheader')

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4 text-primary">Edit Contact</h2>
                        <form action="contacts/update/{id}" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Name:</label>
                                <input type="text" name="fname" class="form-control rounded-pill" value="John Doe" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email:</label>
                                <input type="email" name="email" class="form-control rounded-pill" value="johndoe@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Phone No:</label>
                                <input type="text" name="phone" class="form-control rounded-pill" value="1234567890" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Subject:</label>
                                <input type="text" name="subject" class="form-control rounded-pill" value="Inquiry" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Message:</label>
                                <textarea name="comment" class="form-control rounded-3" rows="4" required>Sample message text...</textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary rounded-pill">Update Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

@include('include.adminjs')
