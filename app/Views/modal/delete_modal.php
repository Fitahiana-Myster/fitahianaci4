<!-- Modal -->
<form>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h7>Are you sure want to delete this Code?? </h7>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_code2" id="id_code" class="form-control" readonly>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary" id="btn_delete">Yes</button>
      </div>
    </div>
  </div>
</div>
</form>

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap5.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/code.js"></script>
</body>
</html>
