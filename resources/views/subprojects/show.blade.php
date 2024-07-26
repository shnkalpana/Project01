<div class="container">
    <div>         
        <table class="table table-bordered">
            <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">sub project name</th>
                  <th scope="col">created at</th>
                  <th scope="col">updated at</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>{{$subproject['id']}}</td>
                    <td>{{$subproject['sub_project_name']}}</td>subproject
                    <td>{{$subproject['created_at']}}</td>
                    <td>{{$subproject['updated_at']}}</td>
                </tr>
            </tbody>
          </table>
    </div>
</div>