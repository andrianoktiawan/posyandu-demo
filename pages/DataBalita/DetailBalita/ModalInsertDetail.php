<div class="modal fade" id="insertModalD">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Input Balita</h5>
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>

      <form method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label class="small mb-1">Umur(bulan)</label>
                <input class="form-control " name ="umur" type="text" placeholder="Enter Umur" required />
            </div>
                
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1 ">Berat Badan(kg)</label>
                        <input class="form-control" name ="bb" type="text" placeholder="Enter Berat Badan" required />
                    </div>
                </div>
                    
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1">Tinggi Badan(cm)</label>
                        <input class="form-control" name ="tb" type="text" placeholder="Enter Tinggi Badan" required />
                    </div>
                </div>
            </div>
            
            <button class="btn btn-primary " name="btnsave">Save</button>     
            
        </div>
      </form>
    </div>
  </div>
</div>