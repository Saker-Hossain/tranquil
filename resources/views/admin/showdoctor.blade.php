
<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px">Doctor Name</th>
                        <th style="padding: 10px; padding-left: 10px;">Phone</th>
                        <th style="padding: 10px;padding-left: 10px">Email</th>
                        <th style="padding: 10px;padding-left: 10px">Speciality</th>
                        <th style="padding: 10px;padding-left: 10px">Room No</th>
                        <th style="padding: 10px;padding-left: 10px">Image</th>
                        <th style="padding: 10px;padding-left: 10px">Delete</th>
                        <th style="padding: 10px;padding-left: 10px">Update</th>
                    </tr>

                    @foreach ($data as $doctor)
                    <tr align="center" style="background-color: skyblue">
                        <td style="padding-left: 10px;">{{$doctor->name}}</td>
                        <td style="padding-left: 10px;">{{$doctor->phone}}</td>
                        <td style="padding-left: 10px;">{{$doctor->email}}</td>
                        <td style="padding-left: 10px;">{{$doctor->speciality}}</td>
                        <td style="padding-left: 10px;">{{$doctor->room}}</td>
                        <td style="padding-left: 10px;"><img height="100px" width="100px" src="doctorimage/{{$doctor->image}}"></td>
                        <td><a onclick="return confirm('are you sure to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
        @include('admin.script')
  </body>
</html>
