@include('headerAdmin')
<body>



<table id="myTable">
  <tr class="header">
    <th style="width:30%;">Product Name</th> 
    <th style="width:20%;">Product Type</th>
    <th style="width:5%;">Size</th>
    <th style="width:5%;">Connectivity</th>
    <th style="width:10%;">Price</th>
    <th style="width:20%;">Main Image</th>
    <th style="width:5%;">Edit</th>
    <th style="width:5%;">Delete</th>

  </tr>
  
  @foreach($products as $product)
  <tr>
    <td>{{$product->product_name}}</td>
    <td>{{$product->product_type}}</td>
    <td>{{$product->size}}</td>
    <td>{{$product->connectivity}}</td>
    <td>{{$product->price}}</td>
    <td><img src="/uploads/products/{{$product ->main_image}}" style="width: 150px; height: 150px;"/></td>
   
    <td><button type="edit">
        <a href="/product/{{$product->id}}" name="edit">Edit</a>
    </button></td>
    <td> 
        <form action="/product/{{$product->id}}">
            <button type="delete" name="delete" formmethod="POST">Delete</button>
            {{ csrf_field() }}
        </form>
    </button></td>
  </tr>
  @endforeach
  
</table>

<br>
<br>
<br>
<br>
<br>


@include('footerAdmin')
