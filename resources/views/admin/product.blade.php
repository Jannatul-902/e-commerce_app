<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 50px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>

                    <div>
                        <label>Product Title:</label>
                        <input class="text_color" type="text" name="title" placeholder="Write a title"  required="">
                    </div>

                    <div>
                        <label>Product Description:</label>
                        <input class="text_color" type="number" name="description" placeholder="Write a description" required="">
                    </div>

                    <div>
                        <label>Product Price:</label>
                        <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>

                    <div>
                        <label>Discount Price:</label>
                        <input class="text_color" type="number" name="dis_price" min="0" placeholder="Write a discount price" required="">
                    </div>


                    <div>
                        <label>Product Quantity:</label>
                        <input class="text_color" type="number" name="number" min="0" placeholder="Write a quantity" required="">
                    </div>

                    <div>
                        <label>Product Category:</label>
                        <select class="text_color" name="category">
                            <option value="" selected="">Add a category here</option>
                            <option>Shirt</option>
                        </select>
                    </div>

                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_design">
                        <label>Product Image Here</label>
                        <Input type="file" name="image" required="">
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>

                    </form>

                </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

  </body>
</hadmin
