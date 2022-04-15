@extends('template')
@section('body')


<div class="row4">
    <div class="col-md-12">
      <div class="card driver">
        <div class="table-responsive pt-3">
              
          <table class="table table-striped project-orders-table">
            <thead>
              <tr>
                <th class="ml-5">ID</th>
                <th>User_id</th>
                <th>Driver_id</th>
                <th>start point </th>
                <th>end point</th>
                <th>start</th>
                <th>end</th>
                {{-- <th>city</th> --}}
                <th>Show & Delete</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#D1</td>
                <td>maryuuum </td>
                <td>@gmail</td>
                <td>011161450097</td>
                <td>*****</td>
                <td>23</td>
                <td>Female</td>
                {{-- <td>Aswan</td> --}}
                <td>
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3" name="show">
                      Show
                      <i class="typcn typcn-edit btn-icon-append"></i>                          
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-text" name="delete">
                      Delete
                      <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                    </button>
                  </div>
                </td>
              </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>












@endsection