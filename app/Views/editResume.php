<!-- Edit Resume Modal -->
<div id="edit-modal" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Edit Resume</p>
      <button class="delete" aria-label="close" onclick="closeModal()"></button>
    </header>
    <form action="/update-resume" method="post" enctype="multipart/form-data">
      <section class="modal-card-body">
        <!-- Example fields, add more as needed -->
        <div class="field">
          <label class="label">Profile Photo</label>
          <div class="control">
            <input class="input" type="file" name="photo" accept="image/*">
          </div>
        </div>
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" name="name" value="<?= esc($resume['name'] ?? '') ?>" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Title</label>
          <div class="control">
            <textarea class="textarea" name="title"><?= esc($resume['title'] ?? '') ?></textarea>
          </div>
        </div>
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <textarea class="textarea" name="email"><?= esc($resume['email'] ?? '') ?></textarea>
          </div>
        </div>
        <div class="field">
          <label class="label">Phone Number</label>
          <div class="control">
            <textarea class="textarea" name="number"><?= esc($resume['number'] ?? '') ?></textarea>
          </div>
        </div>
        <div class="field">
          <label class="label">Address</label>
          <div class="control">
            <textarea class="textarea" name="address"><?= esc($resume['address'] ?? '') ?></textarea>
          </div>
        </div>
        <div class="field">
          <label class="label">Languages</label>
          <div class="control">
            <textarea class="textarea" name="lang"><?= esc($resume['lang'] ?? '') ?></textarea>
          </div>
        </div>
        <!-- Add more fields as needed -->
      </section>
      <footer class="modal-card-foot">
        <button type="button" class="button" onclick="closeModal()">Cancel</button>
        <button type="submit" class="button is-primary" onclick="return confirm('Are you sure you want to save this chuchu?')">Save</button>
      </footer>
    </form>
  </div>
</div>