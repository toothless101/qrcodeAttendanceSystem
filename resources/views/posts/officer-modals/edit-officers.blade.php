<link rel="stylesheet" href="{{ asset('css/pages-css/event.css') }}">


  <!-- Modal -->
  <div class="modal fade" id="editEventOfficersModal" tabindex="-1" aria-labelledby="editEventOfficersLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editEventOfficersLabel">Edit Event Officers</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Officer 1 -->
          <div class="officer-item">
            <div class="officer-info">
              <img src="https://via.placeholder.com/40" alt="Officer Avatar">
              <div>
                <strong>Hilary Mae Poralan</strong><br>
                <small>President</small>
              </div>
            </div>
            <select class="form-select w-50">
              <option value="unassigned" selected>Unassigned</option>
              <option value="assigned">Assigned</option>
            </select>
          </div>
          <!-- Officer 2 -->
          <div class="officer-item">
            <div class="officer-info">
              <img src="https://via.placeholder.com/40" alt="Officer Avatar">
              <div>
                <strong>Hannah Mae Lumangtag</strong><br>
                <small>Vice President</small>
              </div>
            </div>
            <select class="form-select w-50">
              <option value="unassigned" selected>Unassigned</option>
              <option value="assigned">Assigned</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Assign Officer(s)</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
