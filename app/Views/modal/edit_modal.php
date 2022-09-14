<!-- Modal Edit Product-->
<form>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Code</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Kaominina</label>
                <select name="kaominina" id="kaominina2" class="form-control">
                    <option value="">- Misafidy -</option>
                    <?php foreach($kaominina as $row):?>
                        <option value="<?= $row->id;?>"><?= $row->codek . "-" .$row->nom;?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label>Fokontany</label>
                <!-- <input type="text" class="form-control fokontany" id="fokontany2" name="fokontany" placeholder="fokontany"> -->
                <select name="fokontany" id="fokontany2" class="form-control">
                    <option value="">- Misafidy -</option>
                </select>
            </div>

            <div class="form-group">
                <label>Vohitra</label>
                <!-- <input type="text" class="form-control vohitra" id="vohitra2" name="vohitra" placeholder="vohitra"> -->
                <select name="vohitra" id="vohitra2" class="form-control">
                    <option value="">- Misafidy -</option>
                </select>
            </div>
            <div class="form-group">
                <label>laharana_tokan_trano</label>
                <input type="text" class="form-control laharana_tokan_trano" id="laharana_tokan_trano2" name="laharana_tokan_trano" placeholder="laharana_tokan_trano">
            </div>

            <div class="form-group">
                <label>laharana</label>
                <input type="text" class="form-control laharana" id="laharana2" name="laharana" placeholder="laharana">
            </div>

            <div class="form-group">
                <label>plof</label>
                <input type="text" class="form-control plof" id="plof2" name="plof" placeholder="plof">
            </div>

            <div class="form-group">
                <label>lot</label>
                <input type="text" class="form-control lot" id="lot2" name="lot" placeholder="lot">
            </div>

        </div>
        <div class="modal-footer">
            <input type="hidden" name="id_code" class="id_code" id="id_code2">
            <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="btn_update">Update</button>
        </div>
        </div>
    </div>
    </div>
</form>
<!-- End Modal Edit Product-->
