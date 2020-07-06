<html>
    <h5>Products</h5>
    <h4>Scenario</h4>
    <p>You have just been hired as the network administrator of a small company. You took their inventory and came up with a simple topology consisting of a router and two switches. The previous admin already configured the router but not the switches. You then decided to put in the initial configuration for the switches</p>
    <h4>Objectives</h4>
    <ol>
        <li>Configure IP addressing of both PCs</li>
        <li>Configure initial switch configurations for both the switches</li>
        <li>Verify that My PC and Bob's PC can communicate with each other using ping</li>
    </ol>
    <h5>Configuration Parameters</h5>
    <ul>
        <li>Banner Motd should be "Warning, authorized personnel only"</li>
        <li>Passwords for all is pyNShe</li>
        <li>Hostname is the text below the devices</li>
    </ul>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</html>
{{-- select * from products where price > 100 --}}
