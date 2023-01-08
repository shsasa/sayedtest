@include('header')

<body>
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h1>list of products</h1>
                <a href="/product/add" >add product</a>
            </div>



            @unless(count($products) == 0)


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">description</th>
                            <th scope="col">price</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>

                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="/product/{{ $product->id }}/edit">
                                      <i class="fa-solid fa-pencil"></i> Edit
                                    </a></td>
                                <td>
                                    <form method="POST" action="/product/{{ $product->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            @else
                <p>No products found</p>
            @endunless


        </div>


</body>

</html>
