<!-- Modal Add Product-->
<form>
    <div class="modal fade modal-xl" id="momba_ny_tany"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Momba ny tany: </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-2">
              <label>Mirefy tokony ho :</label>
              <input type="text" name="refy" class="form-control" id="refy">
            </div>

              <div class="form-group col-md-2">
                <label>Unité:</label>
                <select name="fokontany" id="fokontany" class="form-control">
                    <option value="">- Misafidy -</option>
                    <option value=""></option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Fomba nahazoana ny tany:</label>
                <input type="text" name="moyenne_a" class="form-control" id="moyenne_a">
              </div>
              <div class="form-group col-md-3">
                <label>Faharetan'ny fanajariana:</label>
                  <input type="text" name="faharetana" class="form-control" id="faharetana">
              </div>
              <div class="form-group col-md-2">
                <label>Unité:</label>
                <select name="fokontany" id="fokontany" class="form-control">
                    <option value="">- Misafidy -</option>
                    <option value=""></option>
                </select>
              </div>
          </div><br>
              <!-- Ambatolampy tsimaafotsy -->
          <div class="row"  style="display: none;" id="Ambatolampy"><hr>
              <div class="form-check col-md-3">
                <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
                <label class="form-check-label" for="flexCheckDefault">Latsakan'ny 20 ara</label>
              </div>
              <div class="form-check col-md-3">
                <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
                <label class="form-check-label" for="flexCheckDefault">Mihoatran'ny 20 ara</label>
              </div>
              <div class="form-group col-md-3" style="margin-bottom: 10px;">
                <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
              </div><hr>
          </div>

          <!-- Ambatomirahavavy -->
      <div class="row" style="display: none;" id="Ambatomirahavavy"><hr>
          <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
            <label class="form-check-label" for="flexCheckDefault">Tanimbary,Tanim-boly</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">Tanety</label>
          </div>
          <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">Tanin-kazo, Dobo, Farihy</label>
          </div>
          <div class="form-group col-md-3" style="margin-bottom: 10px;">
            <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
          </div><hr>
      </div>

        <!-- Amboanana -->
      <div class="row"  style="display: none;" id="Amboanana"><hr>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
            <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">Tanety</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">latsaka 5 ara</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">5 - 10 ara</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">11 - 20 ara</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">21 - 30 ara</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">30 - 50 ara</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">50 ara - 1 ha</label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
            <label class="form-check-label" for="flexCheckDefault">Mihoatra 1 ha</label>
          </div>
          <div class="form-group col-md-3" style="margin-bottom: 10px;">
            <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
          </div><hr>
      </div>

      <!-- Ambohimandry -->
  <div class="row" style="display: none;" id="Ambohimandry"><hr>
      <div class="form-check col-md-2">
        <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
        <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
      </div>
      <div class="form-check col-md-2">
        <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
        <label class="form-check-label" for="flexCheckDefault">Tanety</label>
      </div>
      <div class="form-group col-md-3" style="margin-bottom: 10px;">
        <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
      </div><hr>
  </div>

  <!-- Ambohimiadana -->
<div class="row" style="display: none;" id="Ambohimiadana"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
    <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Latsaka 10 ara</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
    <label class="form-check-label" for="flexCheckDefault">Mihoatra 10 ara</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
    <label class="form-check-label" for="flexCheckDefault">Renivohitra</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
    <label class="form-check-label" for="flexCheckDefault">Ambanivohitra</label>
  </div>
  <div class="form-group col-md-3" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Ambohitrambo -->
<div class="row" style="display: none;" id="Ambohitrambo"><hr>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Hafa</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Latsaky ny 2 ha</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">2 - 4 ha</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">4 - 6ha</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">6 - 10ha</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Mihoatra ny 10 ha</label>
</div>
<div class="form-group col-md-3" style="margin-bottom: 10px;">
  <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
</div><hr>
</div>

<!-- Ambohitromby -->
<div class="row" style="display: none;" id="Ambohitromby"><hr>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Tanety</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">VOHIKANTO</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">HAFARI</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Société industrielle</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">0 - 25 ara</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Mihoatra ny 25 ara</label>
</div>
<div class="form-group col-md-3" style="margin-bottom: 10px;">
  <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
</div><hr>
</div>

<!-- Ampahimanga -->
<div class="row" style="display: none;" id="Ampahimanga"><hr>
<div class="form-check col-md-3">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tanimbary sy Tanimboly</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tany misy kininina</label>
</div>
<div class="form-group col-md-3" style="margin-bottom: 10px;">
  <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
</div><hr>
</div>

<!-- Ampanotokana style="display: none;"-->
<div class="row" style="display: none;" id="Ampanotokana"><hr>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">Tanimboly sy Tanety</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">0 - 49 ara</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Mihoatran'ny 20 ara" id="mihoatran_ny_20_ara">
  <label class="form-check-label" for="flexCheckDefault">50 - 99 ara</label>
</div>
<div class="form-check col-md-2">
  <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
  <label class="form-check-label" for="flexCheckDefault">100 ara mihoatra</label>
</div>
<div class="form-group col-md-2" style="margin-bottom: 10px;">
  <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
</div><hr>
</div>

<!-- Andramasina style="display: none;"-->
<div class="row" style="display: none;" id="Andramasina"><hr>
<div class="form-group" style="margin-bottom: 10px;">
  <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
</div><hr>
</div>

<!-- Antanetibe Anativolo style="display: none;"-->
<div class="row" style="display: none;" id="Antanetibe_a"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety</label>
  </div>
  <div class="form-check col-md-3">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary sy baiboho</label>
  </div>
<div class="form-group col-md-2" style="margin-bottom: 10px;">
  <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
</div><hr>
</div>

<!-- Antanetibe Mahazaza style="display: none;"-->
<div class="row" style="display: none;" id="Antanetibe_m"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tany maka aina</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tokontany trano</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">1 ara - 25 ara</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">26 ara - 50 ara</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Mihoatra ny 50 ara</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Antsahafilo style="display: none;"-->
<div class="row" style="display: none;" id="Antsahafilo"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety sns</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">01 - 49 ara</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">50 - 90 ara</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">100 - 999 ara</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Arivonimamo 1 style="display: none;"-->
<div class="row" style="display: none;" id="Arivonimamo_1"><hr>
  <div class="form-check col-md-3">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly fanodina sy fanondrana</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Taninkazo,Ala,Dobo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety,lava volo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Hors cat</label>
  </div>
  <div class="form-check col-md-5">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tany azo anorenana sy tsy azo volena</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Arivonimamo 2 style="display: none;"-->
<div class="row" style="display: none;"id="Arivonimamo_2"><hr>
  <div class="form-check col-md-4">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanim-bary,Tanim-boly, Tanin-kazo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tany lava volo</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Avaratsena style="display: none;"-->
<div class="row" style="display: none;" id="Avaratsena"><hr>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Betatao style="display: none;"-->
<div class="row" style="display: none;" id="Betatao"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Latsaka ny 1ha</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Mihoatra ny 1ha</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Fihaonana style="display: none;"-->
<div class="row" style="display: none;" id="Fihaonana"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Dobo-Trondro</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Baiboho</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Fiompiana vaventy</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Imerintsiatosika style="display: none;"-->
<div class="row" style="display: none;" id="Imerintsiatosika"><hr>
  <div class="form-check col-md-1">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Cat 1</label>
  </div>
  <div class="form-check col-md-1">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Cat 2</label>
  </div>
  <div class="form-check col-md-1">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Cat 3</label>
  </div>
  <div class="form-check col-md-1">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Cat 4</label>
  </div>
  <div class="form-check col-md-1">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Cat 5</label>
  </div>
  <div class="form-check col-md-1">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Cat 6</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Mahavelona style="display: none;"-->
<div class="row" style="display: none;" id="Mahavelona"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety</label>
  </div>
  <div class="form-check col-md-3">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tany kininina sy/na dobo</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Miantso style="display: none;"-->
<div class="row" style="display: none;" id="Miantso"><hr>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanety tsy voajary</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Taninkazo</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

<!-- Morarano style="display: none;"-->
<div class="row" style="display: none;" id="Morarano"><hr>
  <div class="form-check col-md-3">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimboly sy tanikininina</label>
  </div>
  <div class="form-check col-md-3">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Tanimbary sy tanimboakazo</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Faharetana</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Latsaka 1 ha</label>
  </div>
  <div class="form-check col-md-2">
    <input class="form-check-input" type="checkbox" value="Latsakan'ny 20 ara" id="latsaka_ny_20_ora">
    <label class="form-check-label" for="flexCheckDefault">Mihoatra 1 ha</label>
  </div>
  <div class="form-group col-md-2" style="margin-bottom: 10px;">
    <input type="text" name="zava_misy" class="form-control" id='zava_misy' placeholder="Zava-misy">
  </div><hr>
</div>

          <div class="form-group">
            <label>Olana/Fanamarihana:</label>
            <input type="text" name="olana_f" class="form-control" id='olana_f'>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="tompony_r">Précédent</button>
            <button type="button" class="btn btn-primary" id="fananana_modal2">Suivant</button>
        </div>
        </div>
    </div>
    </div>

</form>
<!-- End Modal Add Product-->
