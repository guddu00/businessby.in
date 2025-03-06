@include('include.admincss')
@include('include.adminheader')

    <main id="content" class="transition-all duration-300 ease-in-out">
        <section class="relative hero h-screen flex items-center justify-center text-center text-white" 
            style="background-image: url('https://th.bing.com/th/id/OIP.69M_KrfzAbZA642OVsjc7wHaEo?w=296&h=184&c=7&r=0&o=5&pid=1.7');">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative z-10 px-6">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4 shining-text">
                    WELCOME TO ADMIN PANEL
                </h1>
                
                <style>
    
                .shining-text {
                    background-image: linear-gradient(
                        -45deg, 
                        #666,   
                        #bbb,  
                        #fff, 
                        #bbb,  
                        #666  
                    );
                    background-size: 300% 300%;
                    background-clip: text;
                    -webkit-background-clip: text;
                    color: transparent;
                    animation: shine 3s linear infinite;
                    text-shadow: 0 0 10px rgba(128, 128, 128, 0.5);
                }
                
                @keyframes shine {
                    0% { background-position: 0% 50%; }
                    50% { background-position: 100% 50%; }
                    100% { background-position: 0% 50%; }
                }
                </style>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
    <a href="userregister.html" class="block">
        <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 w-72 mx-auto transition-transform transform hover:scale-105">
            <div>
                <h3 class="text-gray-500 text-lg font-medium">Total Users register</h3>
                <p class="text-3xl font-bold text-orange-600">12,345</p>
            </div>
            <div class="bg-orange-100 p-4 rounded-full">
                👤
            </div>
        </div>
    </a>

    <a href="businesses.html" class="block">
        <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 w-72 mx-auto transition-transform transform hover:scale-105">
            <div>
                <h3 class="text-gray-500 text-lg font-medium">Total Businesses</h3>
                <p class="text-3xl font-bold text-blue-600">678</p>
            </div>
            <div class="bg-blue-100 p-4 rounded-full">
                🏢
            </div>
        </div>
    </a>
</div>
</div>

        </section>
    </main>

  @include('include.adminjs')