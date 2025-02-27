@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">User Details</h2>
                    <div class="space-x-2">
                        <a href="{{ route('users.edit', $user) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit User
                        </a>
                        <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to Users
                        </a>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-gray-500 text-sm font-semibold mb-1">Name</h3>
                            <p class="text-gray-800 font-medium">{{ $user->name }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-gray-500 text-sm font-semibold mb-1">Surname</h3>
                            <p class="text-gray-800 font-medium">{{ $user->surname }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-gray-500 text-sm font-semibold mb-1">Email</h3>
                            <p class="text-gray-800 font-medium">{{ $user->email }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-gray-500 text-sm font-semibold mb-1">Phone</h3>
                            <p class="text-gray-800 font-medium">{{ $user->phone }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-gray-500 text-sm font-semibold mb-1">Role</h3>
                            <p>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->role === 'admin' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="text-gray-500 text-sm font-semibold mb-1">Created At</h3>
                            <p class="text-gray-800 font-medium">{{ $user->created_at->format('M d, Y H:i') }}</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Delete User
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection