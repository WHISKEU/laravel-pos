<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>
    <h1>Customer Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <h2>Customer List</h2>

    <ul>
        @foreach ($customers as $customer)
            <li>
                {{ $customer->id }} -
                {{ $customer->full_name }} -
                {{ $customer->email }} -
                {{ $customer->phone }}
            </li>
        @endforeach
    </ul>
</body>
</html>