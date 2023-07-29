<!DOCTYPE html>
<html lang="en">
  <head>
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
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color: black" required="" name="name" placeholder="Write the name">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="number" style="color: black" required="" name="number" placeholder="Write the number">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Email</label>
                        <input type="email" style="color: black" required="" name="email" placeholder="Write the email">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Speciality</label>
                        <select name="speciality" id="" required="" style="color: black;  width: 200px;">
                            <option value="">--Select--</option>
                            <option value="occupational-therapy">Occupational Therapy</option>
                            <option value="Speech-and-language-therapy">Speech & Language Therapy</option>
                            <option value="physiotherapy">Physiotherapy</option>
                            <option value="specialized-group-therapy">Specialized Group Therapy</option>
                            <option value="parent-education-and-support">Parent Education & Support</option>
                        </select>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Room No</label>
                        <input type="text" style="color: black" required="" name="room" placeholder="Write the room number">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Doctor Image</label>
                        <input type="file" name="file" required="">
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
