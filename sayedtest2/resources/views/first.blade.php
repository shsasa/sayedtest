<h1>First Customer With the Highest Number of Orders</h1>

<p>Name: {{ $firstOrders->customerName }}</p>

<p>Number of Orders: {{ $firstOrders->orders->count() }}</p>


<h1>First Customer With the Highest Amount of Orders</h1>

<p>Name: {{ $firstSpent->customerName }}</p>
<p>customerNumber: {{ $firstSpent->customerNumber }}</p>

<p>Amount of Orders: {{ $firstSpent->payments->sum('amount') }}</p>