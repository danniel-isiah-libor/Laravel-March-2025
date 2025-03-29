<x-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <form action="{{ route('register') }}" method="POST" class="w-full max-w-sm bg-white p-6 rounded-lg shadow">
            @csrf
            <h2 class="text-xl font-semibold text-center mb-4 text-gray-800">Create an Account</h2>
            
            <div class="mb-4">
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-100 focus:outline-none" placeholder="Name">
                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-100 focus:outline-none" placeholder="Email">
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-100 focus:outline-none" placeholder="Password">
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-100 focus:outline-none" placeholder="Confirm Password">
                @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 focus:ring focus:ring-blue-200 focus:outline-none">
                Register
            </button>
        </form>
    </div>
</x-layout>