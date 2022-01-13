@include('headerAdmin')

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<br>
<br>
<form method="POST" action="/product/{{ $product->id }}" enctype="multipart/form-data">

    <!-- change string type data details -->
    <p>Change product name:</p>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="product_name" placeholder='Enter product name' value="{{$product->product_name}}  ">
            @if ($errors->has('product_name'))
                <span class="text-danger">{{ $errors->first('product_name') }}</span>
            @endif
        </div>
    </div>
    <!-- change string type data details -->
    <p>Change product type:</p>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="product_type" placeholder='Enter product type' value="{{$product->product_type}}  ">
            @if ($errors->has('product_type'))
                <span class="text-danger">{{ $errors->first('product_type') }}</span>
            @endif
        </div>
    </div>
     <!-- bio div -->
     <div>
        <p>Change product description:</p>
        <textarea name="description" placeholder='Update product description'>
            {!! html_entity_decode($product->description) !!}
        </textarea>  
        <script>
            
            CKEDITOR.replace( 'description' );
            CKEDITOR.config.height = 500; 
        </script>
        @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <!-- change string type data details -->
    <p>Change product size:</p>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="size" placeholder='Enter product size' value="{{$product->size}}  ">
            @if ($errors->has('size'))
                <span class="text-danger">{{ $errors->first('size') }}</span>
            @endif
        </div>
    </div>
    <!-- change string type data details -->
    <p>Change product connectivity:</p>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="connectivity" placeholder='Enter product connectivity type' value="{{$product->connectivity}}  ">
            @if ($errors->has('connectivity'))
                <span class="text-danger">{{ $errors->first('connectivity') }}</span>
            @endif
        </div>
    </div>
    <!-- change string type data details -->
    <p>Change product stock:</p>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="stock" placeholder='Enter the number of stock' value="{{$product->stock}}  ">
            @if ($errors->has('stock'))
                <span class="text-danger">{{ $errors->first('stock') }}</span>
            @endif
        </div>
    </div>
    <!-- change string type data details -->
    <p>Change product price:</p>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="price" placeholder='Enter product price' value="{{$product->price}}  ">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product main image:</label>
        <input type="file" name="main_image" id="fileInput"  onchange="loadFile(event, 'main_image');" >
        <img id="main_image" src="/uploads/products/{{$product ->main_image}}" width="200" />


            @if ($errors->has('main_image'))
                <span>{{ $errors->first('main_image') }}</span>
            @endif
           
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product tumbnail main image:</label>
        <input type="file" name="tumbnail_main_image" id="fileInput"  onchange="loadFile(event, 'tumbnail_main_image');" >
        <img id="tumbnail_main_image" src="/uploads/products/{{$product ->tumbnail_main_image}}" width="200" />


            @if ($errors->has('tumbnail_main_image'))
                <span>{{ $errors->first('tumbnail_main_image') }}</span>
            @endif
           
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product large main image:</label>
        <input type="file" name="large_main_image" id="fileInput"  onchange="loadFile(event, 'large_main_image');" >
        <img id="large_main_image" src="/uploads/products/{{$product ->large_main_image}}" width="200" />


            @if ($errors->has('large_main_image'))
                <span>{{ $errors->first('large_main_image') }}</span>
            @endif
           
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product sub image 1:</label>
        <input type="file" name="sub_image_1" id="fileInput"  onchange="loadFile(event, 'sub_image_1');" >
        <img id="sub_image_1" src="/uploads/products/{{$product ->sub_image_1}}" width="200" style="display: {{$product->display_1}}" />


            @if ($errors->has('sub_image_1'))
                <span>{{ $errors->first('sub_image_1') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget1" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product tumbnail sub image 1:</label>
        <input type="file" name="tumbnail_sub_image_1" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_1');" >
        <img id="tumbnail_sub_image_1" src="/uploads/products/{{$product ->tumbnail_sub_image_1}}" width="200" style="display: {{$product->tumbnail_display_1}}" />


            @if ($errors->has('tumbnail_sub_image_1'))
                <span>{{ $errors->first('tumbnail_sub_image_1') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget1" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product large sub-image 1:</label>
        <input type="file" name="large_sub_image_1" id="fileInput"  onchange="loadFile(event, 'large_sub_image_1');" >
        <img id="large_sub_image_1" src="/uploads/products/{{$product ->large_sub_image_1}}" width="200" />


            @if ($errors->has('large_sub_image_1'))
                <span>{{ $errors->first('large_sub_image_1') }}</span>
            @endif
           
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product sub image 2:</label>
        <input type="file" name="sub_image_2" id="fileInput"  onchange="loadFile(event, 'sub_image_2');" >
        <img id="sub_image_2" src="/uploads/products/{{$product ->sub_image_2}}" width="200" style="display: {{$product->display_2}}"/>


            @if ($errors->has('sub_image_2'))
                <span>{{ $errors->first('sub_image_2') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget2" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product tumbnail sub image 2:</label>
        <input type="file" name="tumbnail_sub_image_2" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_2');" >
        <img id="tumbnail_sub_image_2" src="/uploads/products/{{$product ->tumbnail_sub_image_2}}" width="200" style="display: {{$product->tumbnail_display_2}}" />


            @if ($errors->has('tumbnail_sub_image_2'))
                <span>{{ $errors->first('tumbnail_sub_image_2') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget1" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product large sub-image 2:</label>
        <input type="file" name="large_sub_image_2" id="fileInput"  onchange="loadFile(event, 'large_sub_image_2');" >
        <img id="large_sub_image_2" src="/uploads/products/{{$product ->large_sub_image_2}}" width="200" />


            @if ($errors->has('large_sub_image_2'))
                <span>{{ $errors->first('large_sub_image_2') }}</span>
            @endif
           
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product sub image 3:</label>
        <input type="file" name="sub_image_3" id="fileInput"  onchange="loadFile(event, 'sub_image_3');" >
        <img id="sub_image_3" src="/uploads/products/{{$product ->sub_image_3}}" width="200" style="display: {{$product->display_3}}"/>


            @if ($errors->has('sub_image_3'))
                <span>{{ $errors->first('sub_image_3') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget3" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product tumbnail sub image 3:</label>
        <input type="file" name="tumbnail_sub_image_3" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_3');" >
        <img id="tumbnail_sub_image_3" src="/uploads/products/{{$product ->tumbnail_sub_image_3}}" width="200" style="display: {{$product->tumbnail_sub_image_3}}" />


            @if ($errors->has('tumbnail_sub_image_3'))
                <span>{{ $errors->first('tumbnail_sub_image_3') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget1" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product large sub-image 3:</label>
        <input type="file" name="large_sub_image_3" id="fileInput"  onchange="loadFile(event, 'large_sub_image_3');" >
        <img id="large_sub_image_3" src="/uploads/products/{{$product ->large_sub_image_3}}" width="200" />


            @if ($errors->has('large_sub_image_3'))
                <span>{{ $errors->first('large_sub_image_3') }}</span>
            @endif
           
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product sub image 4:</label>
        <input type="file" name="sub_image_4" id="fileInput"  onchange="loadFile(event, 'sub_image_4');" >
        <img id="sub_image_4" src="/uploads/products/{{$product ->sub_image_4}}" width="200" style="display: {{$product->display_4}}"/>


            @if ($errors->has('sub_image_4'))
                <span>{{ $errors->first('sub_image_4') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget4" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product tumbnail sub image 4:</label>
        <input type="file" name="tumbnail_sub_image_4" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_4');" >
        <img id="tumbnail_sub_image_4" src="/uploads/products/{{$product ->tumbnail_sub_image_4}}" width="200" style="display: {{$product->tumbnail_sub_image_4}}" />


            @if ($errors->has('tumbnail_sub_image_4'))
                <span>{{ $errors->first('tumbnail_sub_image_4') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget1" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product large sub-image 4:</label>
        <input type="file" name="large_sub_image_4" id="fileInput"  onchange="loadFile(event, 'large_sub_image_4');" >
        <img id="large_sub_image_4" src="/uploads/products/{{$product ->large_sub_image_4}}" width="200" />


            @if ($errors->has('large_sub_image_4'))
                <span>{{ $errors->first('large_sub_image_4') }}</span>
            @endif
           
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product sub image 5:</label>
        <input type="file" name="sub_image_5" id="fileInput"  onchange="loadFile(event, 'sub_image_5');" >
        <img id="sub_image_5" src="/uploads/products/{{$product ->sub_image_5}}" width="200" style="display: {{$product->display_5}}"/>


            @if ($errors->has('sub_image_5'))
                <span>{{ $errors->first('sub_image_5') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget5" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product tumbnail sub image 5:</label>
        <input type="file" name="tumbnail_sub_image_5" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_5');" >
        <img id="tumbnail_sub_image_5" src="/uploads/products/{{$product ->tumbnail_sub_image_5}}" width="200" style="display: {{$product->tumbnail_sub_image_5}}" />


            @if ($errors->has('tumbnail_sub_image_5'))
                <span>{{ $errors->first('tumbnail_sub_image_5') }}</span>
            @endif
            <div class="sortInputs" style="justify-content: left;">
                <button type="delete" name="forget1" style="color: white; width: 30%">Delete Image</button>
            </div>
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Change product large sub-image 5:</label>
        <input type="file" name="large_sub_image_5" id="fileInput"  onchange="loadFile(event, 'large_sub_image_5');" >
        <img id="large_sub_image_5" src="/uploads/products/{{$product ->large_sub_image_5}}" width="200" />


            @if ($errors->has('large_sub_image_5'))
                <span>{{ $errors->first('large_sub_image_5') }}</span>
            @endif
           
    </div>
    
    <div class="sortInputs">
        <div>
            <button type="add" name="update" style="color: white;">Update Product</button>
        </div>
    {{ csrf_field() }}
    </div>
    

</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


@include('footerAdmin')