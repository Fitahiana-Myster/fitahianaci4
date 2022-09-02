<!-- Modal Add Product-->
<form>
    <div class="modal fade modal-xl" id="add2"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Code: </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-4">
              <label>Kaominina:</label>
              <select name="kaominina" id="kaominina" class="form-control">
                  <option value="">- Misafidy -</option>
                  <?php foreach($kaominina as $row):?>
                      <option value="<?= $row->codek;?>"><?= $row->codek . "-" .$row->nom;?></option>
                  <?php endforeach;?>
              </select>
            </div>

              <div class="form-group col-md-4">
                <label>Fokontany:</label>
                <select name="fokontany" id="fokontany" class="form-control">
                    <option value="">- Misafidy -</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label>Vohitra:</label>
                <select name="vohitra" id="vohitra" class="form-control">
                    <option value="">- Misafidy -</option>
                </select>
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label>Laharana tokan-trano (menage):</label>
              <input type="text" name="laharana_tokan_trano" class="form-control" id="laharana_tokan_trano">
            </div>
            <div class="form-group col-md-2">
              <label>Laharana:</label>
              <input type="text" name="laharana" class="form-control" id="laharana">
            </div>
            <div class="form-group col-md-2">
              <label>N° PLOF:</label>
              <input type="text" name="plof" class="form-control" id='plof'>
            </div>
            <div class="form-group  col-md-4">
              <label>LOT:</label>
              <input type="text" name="lot" class="form-control" id='lot'>
            </div>
          </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="btn_save">Save</button>
            <button type="button" class="btn btn-primary" id="tompony">Suivant</button>
        </div>
        </div>
    </div>
    </div>

</form>
<!-- End Modal Add Product-->
