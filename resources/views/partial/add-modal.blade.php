<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
     <div class="modal-header bg-warning">
       <h5 class="modal-title" id="exampleModalLongTitle">Add New Student</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <form  method="post">
      <div class="modal-body">
          <div class="form-group">
              <label>Name</label>
              <input id="name" name="name" class="form-control form-control-sm" />
              <span class="name-error text-danger"></span>
          </div>
          <div class="form-group">
              <label>Dept.</label>
              <input name="dept" id="dept" class="form-control form-control-sm" />
              <span class="dept-error text-danger"></span>
          </div>
          <div class="form-group">
              <label>Shift</label>
              <input name="shift" id="shift" class="form-control form-control-sm" />
              <span class="shift-error text-danger"></span>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closeModal">Close</button>
        <button type="button" class="btn btn-success" id="addStudent">Save</button>
      </div>
     </form>
   </div>
 </div>
</div>