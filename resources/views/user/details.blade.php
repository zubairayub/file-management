<x-app-layout>



    <div class="container">
        <h1>User Details</h1>

        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ ucfirst($user->status) }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ ucfirst($user->role) }}</td>
            </tr>
            <tr>
                <th>Package</th>
                <td>
                    @if($user->userPackages->isNotEmpty())
                        @foreach($user->userPackages as $package)
                            <p>{{ $package->package->package_name }} ({{ $package->package_type }})</p>
                        @endforeach
                    @else
                        No package assigned
                    @endif
                </td>
            </tr>
            <tr>
                <th>Total Paid</th>
                <td>
                ${{ number_format($user->orders()->sum('amount'), 2) ?: 'No Payments Made' }}
                </td>
            </tr>
           
            <tr>
                <th>Quota Used</th>
                <td>{{ $user->quota_used }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $user->phone_number }}</td>
            </tr>
            <tr>
                <th>Orders</th>
                <td>
                    @foreach($user->orders as $order)
                        <p>Order #{{ $order->order_number }} - Amount: ${{ $order->amount }} - Status: {{ ucfirst($order->payment_status) }} - Payment Method: {{ ucfirst($order->payment_method) }}</p>
                    @endforeach
                </td>
            </tr>
        </table>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to User List</a>
    </div>

    </x-app-layout>