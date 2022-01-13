@include('headerAdmin')

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<br>
<br>
<form method="POST" action="/product" enctype="multipart/form-data">

    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="product_name" placeholder='Enter product name'></textarea>  
            @if ($errors->has('product_name'))
                <span class="text-danger">{{ $errors->first('product_name') }}</span>
            @endif
        </div>
    </div>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="product_type" placeholder='Enter product type'></textarea>  
            @if ($errors->has('product_type'))
                <span class="text-danger">{{ $errors->first('product_type') }}</span>
            @endif
        </div>
    </div>
    <!-- description div -->
    <div>
        <p>Enter product description:</p>
        <textarea name="description" placeholder='Enter product description'></textarea>  
        <script>
            CKEDITOR.replace( 'description' );
        </script>
        @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="size" placeholder='Enter size of keyboard'></textarea>  
            @if ($errors->has('size'))
                <span class="text-danger">{{ $errors->first('size') }}</span>
            @endif
        </div>
    </div>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="connectivity" placeholder='Enter product connectivity'></textarea>  
            @if ($errors->has('connectivity'))
                <span class="text-danger">{{ $errors->first('connectivity') }}</span>
            @endif
        </div>
    </div>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="stock" placeholder='Enter product stock quantity'></textarea>  
            @if ($errors->has('stock'))
                <span class="text-danger">{{ $errors->first('stock') }}</span>
            @endif
        </div>
    </div>
    <div class="sortInputs">
        <div style="width: 35%">
            <input type="text" name="price" placeholder='Enter product price'></textarea>  
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
    </div>
    

    
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product image:</label>
        <input type="file" name="main_image" id="fileInput"  onchange="loadFile(event, 'main_image');" >
        <img id="main_image" width="200" />


            @if ($errors->has('main_image'))
                <span>{{ $errors->first('main_image') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product tumbnail main image:</label>
        <input type="file" name="tumbnail_main_image" id="fileInput"  onchange="loadFile(event, 'tumbnail_main_image');" >
        <img id="tumbnail_main_image" width="200" />


            @if ($errors->has('tumbnail_main_image'))
                <span>{{ $errors->first('tumbnail_main_image') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product large main image:</label>
        <input type="file" name="large_main_image" id="fileInput"  onchange="loadFile(event, 'large_main_image');" >
        <img id="large_main_image" width="200" />


            @if ($errors->has('large_main_image'))
                <span>{{ $errors->first('large_main_image') }}</span>
            @endif
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product sub-image 1:</label>
        <input type="file" name="sub_image_1" id="fileInput"  onchange="loadFile(event, 'sub_image_1');" >
        <img id="sub_image_1" width="200" />


            @if ($errors->has('sub_image_1'))
                <span>{{ $errors->first('sub_image_1') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product tumbnail sub-image 1:</label>
        <input type="file" name="tumbnail_sub_image_1" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_1');" >
        <img id="tumbnail_sub_image_1" width="200" />


            @if ($errors->has('tumbnail_sub_image_1'))
                <span>{{ $errors->first('tumbnail_sub_image_1') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product large sub-image 1:</label>
        <input type="file" name="large_sub_image_1" id="fileInput"  onchange="loadFile(event, 'large_sub_image_1');" >
        <img id="large_sub_image_1" width="200" />


            @if ($errors->has('large_sub_image_1'))
                <span>{{ $errors->first('large_sub_image_1') }}</span>
            @endif
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product sub-image 2:</label>
        <input type="file" name="sub_image_2" id="fileInput"  onchange="loadFile(event, 'sub_image_2');" >
        <img id="sub_image_2" width="200" />


            @if ($errors->has('sub_image_2'))
                <span>{{ $errors->first('sub_image_2') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product tumbnail sub-image 2:</label>
        <input type="file" name="tumbnail_sub_image_2" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_2');" >
        <img id="tumbnail_sub_image_2" width="200" />


            @if ($errors->has('tumbnail_sub_image_2'))
                <span>{{ $errors->first('tumbnail_sub_image_2') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product large sub-image 2:</label>
        <input type="file" name="large_sub_image_2" id="fileInput"  onchange="loadFile(event, 'large_sub_image_2');" >
        <img id="large_sub_image_2" width="200" />


            @if ($errors->has('large_sub_image_2'))
                <span>{{ $errors->first('large_sub_image_2') }}</span>
            @endif
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product sub-image 3:</label>
        <input type="file" name="sub_image_3" id="fileInput"  onchange="loadFile(event, 'sub_image_3');" >
        <img id="sub_image_3" width="200" />


            @if ($errors->has('sub_image_3'))
                <span>{{ $errors->first('sub_image_3') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product tumbnail sub-image 3:</label>
        <input type="file" name="tumbnail_sub_image_3" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_3');" >
        <img id="tumbnail_sub_image_3" width="200" />


            @if ($errors->has('tumbnail_sub_image_3'))
                <span>{{ $errors->first('tumbnail_sub_image_3') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product large sub-image 3:</label>
        <input type="file" name="large_sub_image_3" id="fileInput"  onchange="loadFile(event, 'large_sub_image_3');" >
        <img id="large_sub_image_3" width="200" />


            @if ($errors->has('large_sub_image_3'))
                <span>{{ $errors->first('large_sub_image_3') }}</span>
            @endif
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product sub-image 4:</label>
        <input type="file" name="sub_image_4" id="fileInput"  onchange="loadFile(event, 'sub_image_4');" >
        <img id="sub_image_4" width="200" />


            @if ($errors->has('sub_image_4'))
                <span>{{ $errors->first('sub_image_4') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product tumbnail sub-image 4:</label>
        <input type="file" name="tumbnail_sub_image_4" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_4');" >
        <img id="tumbnail_sub_image_4" width="200" />


            @if ($errors->has('tumbnail_sub_image_4'))
                <span>{{ $errors->first('tumbnail_sub_image_4') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product large sub-image 4:</label>
        <input type="file" name="large_sub_image_4" id="fileInput"  onchange="loadFile(event, 'large_sub_image_4');" >
        <img id="large_sub_image_4" width="200" />


            @if ($errors->has('large_sub_image_4'))
                <span>{{ $errors->first('large_sub_image_4') }}</span>
            @endif
    </div>
    <hr>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product sub-image 5:</label>
        <input type="file" name="sub_image_5" id="fileInput"  onchange="loadFile(event, 'sub_image_5');" >
        <img id="sub_image_5" width="200" />


            @if ($errors->has('sub_image_5'))
                <span>{{ $errors->first('sub_image_5') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product tumbnail sub-image 5:</label>
        <input type="file" name="tumbnail_sub_image_5" id="fileInput"  onchange="loadFile(event, 'tumbnail_sub_image_5');" >
        <img id="tumbnail_sub_image_5" width="200" />


            @if ($errors->has('tumbnail_sub_image_5'))
                <span>{{ $errors->first('tumbnail_sub_image_5') }}</span>
            @endif
    </div>
    <!-- upload image div -->
    <div class="uploadImageDiv">

        <br>
        <label>Upload product large sub-image 5:</label>
        <input type="file" name="large_sub_image_5" id="fileInput"  onchange="loadFile(event, 'large_sub_image_5');" >
        <img id="large_sub_image_5" width="200" />


            @if ($errors->has('large_sub_image_5'))
                <span>{{ $errors->first('large_sub_image_5') }}</span>
            @endif
    </div>

  
    
    <div class="sortInputs">
        <div>
            <button type="add" style="color: white;">Add Product</button>
        </div>
    {{ csrf_field() }}
    
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


@include('footerAdmin')