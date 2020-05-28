<div class="card">
    <div class="card-header">
        <h5 class="text-primary"> Formulir Kritik dan Saran</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('patient/feedback') ?>" method="POST">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Kritik :</label>
                <div class="col-sm-8">
                   <textarea name="critic" id="critic" cols="30" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Saran :</label>
                <div class="col-sm-8">
                    <textarea name="suggest" id="suggest" cols="30" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <hr>
       
                <button type="submit" class="btn btn-primary float-right">Kirim <i class="fa fa-envelope" aria-hidden="true"></i> </button>
          
        </form>
    </div>
</div>