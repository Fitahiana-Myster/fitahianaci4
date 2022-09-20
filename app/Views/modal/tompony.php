<!-- First modal dialog -->
<!-- <form> -->
<div class="modal fade modal-xl" id="tompony_modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Momba ny tompon-tany: </h5>
          <a class="btn btn-success btn-sm  fa fa-plus" id="consort"></a>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </button>
      </div>
      <div class="modal-body" id="consort_body">
        <div class="row">
        <div class="form-group col-md-4">
          <label>Anarana sy Fanampiny:</label>
          <input type="text" name="nom[]" class="form-control" id="nom">
        </div>
          <div class="form-group col-md-4">
            <label>Daty nahaterahana:</label>
            <input type="text" name="date_n[]" class="form-control" id="date_n">
          </div>
          <div class="form-group col-md-4">
            <label>Toerana nahaterahana:</label>
            <input type="text" name="lieu_n[]" class="form-control" id="lieu_n">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label>Adiresy:</label>
            <input type="text" name="adresse[]" class="form-control" id="adresse">
          </div>
          <div class="form-group col-md-4">
            <label>Tél:</label>
            <input type="text" name="tel[]" class="form-control" id="tel">
          </div>
          <div class="form-group col-md-4">
            <label>Lahy/Vavy:</label>
            <select class="form-control" name="genre[]" id="genre">
              <option value=""></option>
              <option value="Lahy">Lahy</option>
              <option value="Vavy">Vavy</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label>Laharana:</label>
            <input type="text" name="cin[]"  class="form-control cin" id="cin"  maxlength="12" required>
          </div>
          <div class="form-group col-md-4">
            <label>Daty nanomezana:</label>
            <input type="text" name="date_d_cin[]" class="form-control" id='date_d_cin'>
          </div>
          <div class="form-group col-md-4">
            <label>Toerana nanomezana:</label>
            <input type="text" name="tao[]" class="form-control" id='tao'>
          </div>
        </div>
        <div id="consort_vaovao"></div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-add2" >Précédent</button>
          <button type="button" class="btn btn-primary momba_ny_tany" >Suivant</button>
          <button type="submit" class="btn btn-danger" id="save_tompony" >save</button>
      </div>
    </div>
  </div>
</div>
<!-- </form> -->
