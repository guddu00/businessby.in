@include('include.admincss')
@include('include.adminheader')

<style>
    html, body {
        height: 100vh;
        overflow: hidden;
    }
    .no-scroll-page {
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container {
        margin-top: -70px;
        padding-top: 20px;
        width: 100%;
    }
    .category-list {
        max-height: 200px;
        overflow-y: auto;
    }
</style>

<div class="container flex flex-col justify-center items-center px-4 h-screen w-full no-scroll-page ">
    <h2 class="text-3xl font-bold text-gray-900 border-b-4 border-orange-600 pb-2 mb-4 mt-6">
        Manage Business Categories
    </h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-orange-600 text-white py-3 px-6 text-lg font-semibold">
            Add New Category
        </div>
        <div class="p-6">
            <form id="categoryForm" method="POST" action="{{ url('/admin/categories/store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Category Name</label>
                    <input 
                        type="text" name="name" id="name" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        placeholder="Enter Business Category" required>
                </div>
                <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">
                    Add Category
                </button>
            </form>
        </div>
    </div>

    {{-- Toggle Existing Categories --}}
    <button id="toggleCategories" class="w-full max-w-2xl bg-blue-600 text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-700 transition">
        Existing Categories
    </button>

    {{-- Existing Categories (Initially Hidden) --}}
    <div id="categorySection" class="w-full max-w-2xl mt-4 bg-gray-100 p-4 rounded-lg shadow-lg hidden category-list">
        <ul class="divide-y divide-gray-300">
            @foreach($categories as $category)
                <li class="flex justify-between items-center py-2 px-4 bg-white shadow-sm rounded-lg mb-2">
                    <span class="text-gray-800 font-medium">{{ $category->name }}</span>
                    <a href="{{ url('/admin/categories/edit', $category->id) }}" 
                       class="bg-yellow-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-yellow-600 transition">
                        Edit
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    document.getElementById('toggleCategories').addEventListener('click', function () {
        var categorySection = document.getElementById('categorySection');
        categorySection.classList.toggle('hidden');
    });
</script>

@include('include.adminjs')
