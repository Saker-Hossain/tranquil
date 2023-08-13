<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <div class="container" align="center" style="padding-top: 100px">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x

                    </button>
                    {{session()->get('message')}}
                </div>
            @endif
                <form action="{{url('sendemail',$data->id)}}" method="POST">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Greeting</label>
                        <input type="text" style="color: black" required="" name="greeting">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Body</label>
                        <input type="text" style="color: black" required="" name="body">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Action Text</label>
                        <input type="text" style="color: black" required="" name="actiontext">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Action Url</label>
                        <input type="text" style="color: black" required="" name="actionurl">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">End Part</label>
                        <input type="text" style="color: black" required="" name="endpart">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      <!-- page-body-wrapper ends -->
    </div>
        @include('admin.script')
  </body>
</html>
