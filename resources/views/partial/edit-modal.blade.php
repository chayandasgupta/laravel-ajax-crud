<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
     <div class="modal-header bg-warning">
       <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Data</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <form  method="post">
      <div class="modal-body">
          <div class="form-group">
              <label>Name</label>
              <input id="fName" name="name" class="form-control form-control-sm" />
          </div>
          <div class="form-group">
              <label>Dept.</label>
              <input name="dept" id="gender" class="form-control form-control-sm" />
          </div>
          <div class="form-group">
              <label>Shift</label>
              <input name="shift" id="age" class="form-control form-control-sm" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
     </form>
   </div>
 </div>
</div>