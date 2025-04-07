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
                    <label>Product Title</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title">
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
