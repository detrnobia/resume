<!-- Edit Resume Modal -->
<div id="edit-modal" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Edit Resume</p>
      <button class="delete" aria-label="close" onclick="closeModal()"></button>
    </header>
    <form action="/updateResume" method="post" enctype="multipart/form-data">
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
            <input class="input" type="text" name="name" value="<?= esc($profile['name'] ?? '') ?>" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Title</label>
          <div class="control">
            <input class="input" name="title" value="<?= esc($profile['title'] ?? '') ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input class="input" name="email" value="<?= esc($profile['email'] ?? '') ?>">

          </div>
        </div>
        <div class="field">
          <label class="label">Phone Number</label>
          <div class="control">
            <input class="input" name="phone" value="<?= esc($profile['phone'] ?? '') ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Address</label>
          <div class="control">
            <input class="input" name="address" value="<?= esc($profile['address'] ?? '') ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Languages</label>
          <div class="control">
            <textarea class="textarea" name="lang"><?= esc($profile['lang'] ?? '') ?></textarea>
          </div>
        </div>
      </section>
      <footer class="modal-card-foot">
        <button type="button" class="button" onclick="closeModal()">Cancel</button>
        <button type="submit" class="button is-primary" onclick="return confirm('Are you sure you want to save this chuchu?')">Save</button>
      </footer>
    </form>
  </div>
</div>