<div class="row">
    <div class="col-sm-4">
        <!-- <input class="form-control" type="text" placeholder="Search"> -->
        <select class="form-control" name="livesearch"></select>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
            <div class="img-group ml-3">
                <span class="badge bg-secondary">Wood</span>
                <span class="badge bg-secondary">Nails</span>
            </div>
            <button type="button" class="btn btn-gradient-primary btn-sm text-light ml-3 px-4">
               <i class="material-icons md-18 align-middle me-1 add_circle">add_circle</i>
               Add
            </button>
            <input id="add-member" type="file" name="files[]" multiple="" style="display: none;">
        </div>                                            
    </div>
</div>
<hr>
<div class="view-list-details card">
  <div class="box-shadow">
   <div id="search">
      <form id="search-form" action="" method="POST" enctype="multipart/form-data">
         <div class="row">
            <div class="form-group col-md-9">
               <input class="form-control" type="text" placeholder="Search" />
            </div>
            <div class="form-group col-md-3">
               <button type="submit" class="btn btn-block btn-soft-danger btn-md fw-semibold" >Search</button>
            </div>
         </div>
      </form>
   </div>
   <div class="row">
      <div class="col-md-12">
         <p class="text-muted fw-semibold flex-grow-1">Records</p>
         <span class="badge badge-default text-muted">Filtered 16</span>
         <span class="badge badge-default text-muted">Total 20</span>
      </div>
   </div>
</div>
<div class="row" id="add_option">
   <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <th scope="col">Project Name</th>
              <th scope="col">Description</th>
              <th scope="col">Start Date</th>
              <th scope="col">End date</th>
              <th scope="col">Created By</th>
              <th scope="col">Date Created</th>
            </tr>
          </thead>
          <tbody>
         {{--    @foreach($details as $project)
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td >
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->name}}
                 </a>
              </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->description}}
                </a>
            </td>
            <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                  {{$project->date_started}}
                </a>
              </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                  {{$project->date_stopped}}
              </a>
              </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->createdBy->person->firstName.' '.$project->createdBy->person->lastName}}
               </a>
            </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->date_created}}
            </a>
            </td>
            </tr>
            @endforeach
            --}}
          </tbody>
        </table>
        <div class="d-flex justify-content-end mb-5">
          <div class="pagination-wrap hstack gap-2" style="display: flex;">
             <a class="page-item pagination-prev disabled" href="#">
             Previous
             </a>
             <ul class="pagination listjs-pagination mb-0">
                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                <li><a class="page" href="#" data-i="2" data-page="8">2</a></li>
             </ul>
             <a class="page-item pagination-next" href="#">
             Next
             </a>
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
  
    $('#search').select2({
        placeholder: 'Select an user',
        ajax: {
          url: path,
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });
  
</script>
