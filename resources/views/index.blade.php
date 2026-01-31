<x-layout.app>
    <div>test</div>
     <!-- Top Bar -->
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <h1 class="text-2xl font-semibold">Dashboard</h1>

        <div class="flex gap-2">
          <input type="text" placeholder="Search..." class="input input-bordered w-full md:w-64" />
          <button class="btn btn-outline">Generate Report</button>
          <button class="btn btn-primary">+ New Order</button>
        </div>
      </div>

      <!-- Stats -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="card bg-base-300 shadow">
          <div class="card-body">
            <p class="text-gray-500">Total Sales</p>
            <h2 class="text-2xl font-bold">$12,450.54</h2>
            <span class="text-green-500 text-sm">▲ 29.7%</span>
          </div>
        </div>

        <div class="card bg-base-300 shadow">
          <div class="card-body">
            <p class="text-gray-500">Customers</p>
            <h2 class="text-2xl font-bold">650</h2>
            <span class="text-green-500 text-sm">▲ 30.1%</span>
          </div>
        </div>

        <div class="card bg-base-300 shadow">
          <div class="card-body">
            <p class="text-gray-500">Orders Completed</p>
            <h2 class="text-2xl font-bold">95</h2>
            <span class="text-green-500 text-sm">▲ 25.3%</span>
          </div>
        </div>

        <div class="card bg-base-300 shadow">
          <div class="card-body">
            <p class="text-gray-500">Orders Cancelled</p>
            <h2 class="text-2xl font-bold">10</h2>
            <span class="text-red-500 text-sm">▲ 10.2%</span>
          </div>
        </div>
      </div>

      <!-- Orders Table -->
      <div class="card bg-base-300 shadow">
        <div class="card-body">
          <h3 class="font-semibold text-lg mb-4">Recent Orders</h3>

          <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Customer</th>
                  <th>Product</th>
                  <th>Total</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#5678</td>
                  <td>Floyd Miles</td>
                  <td>Smartwatch Pro</td>
                  <td>$155.00</td>
                  <td><span class="badge badge-success">Completed</span></td>
                </tr>
                <tr>
                  <td>#5679</td>
                  <td>Annette Black</td>
                  <td>Wireless Headphones</td>
                  <td>$120.00</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>#5680</td>
                  <td>Jenny Wilson</td>
                  <td>MacBook Air</td>
                  <td>$1,200.00</td>
                  <td><span class="badge badge-error">Cancelled</span></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>

</x-layout.app>