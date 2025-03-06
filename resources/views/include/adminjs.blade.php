<script>
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("main-content");

    menuBtn.addEventListener("click", () => {
        sidebar.classList.remove("-translate-x-full");
        mainContent.classList.add("sidebar-open");
    });

    closeBtn.addEventListener("click", () => {
        sidebar.classList.add("-translate-x-full");
        mainContent.classList.remove("sidebar-open");
   });

   document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const sidebar = document.getElementById("sidebar");
    const mainContainer = document.getElementById("main-container");

    menuBtn.addEventListener("click", function () {
        sidebar.classList.add("active"); // Show sidebar
        mainContainer.classList.add("shift"); // Move content
    });

    closeBtn.addEventListener("click", function () {
        sidebar.classList.remove("active"); // Hide sidebar
        mainContainer.classList.remove("shift"); // Reset content position
    });
});




    $(document).ready(function() {
        // Handle form submission
        $("#categoryForm").submit(function(event) {
            event.preventDefault(); // Prevent page reload

            let formData = $(this).serialize(); // Serialize form data
            
            $.ajax({
                url: "{{ url('/admin/categories/store') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    if (response.success) {
                        // Append the new category to the list
                        $("#categoryList").append(`
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>${response.category.name}</span>
                                <a href="#" class="btn btn-warning btn-sm edit-category" data-id="${response.category.id}">Edit</a>
                            </li>
                        `);
                        $("#name").val(""); // Clear input field
                    }
                }
            });
        });
    });
</script>
