// function showEditForm() {
//   // If form already exists, just show it
//   if (document.getElementById('resume-edit-overlay')) {
//     document.getElementById('resume-edit-overlay').style.display = 'flex';
//     return;
//   }

//   // Fetch current data from backend (AJAX)
//   fetch('/api/resume')
//     .then(res => res.json())
//     .then(data => {
//       // Create overlay
//       const overlay = document.createElement('div');
//       overlay.id = 'resume-edit-overlay';
//       overlay.style.position = 'fixed';
//       overlay.style.top = 0;
//       overlay.style.left = 0;
//       overlay.style.width = '100vw';
//       overlay.style.height = '100vh';
//       overlay.style.background = 'rgba(30,20,60,0.93)';
//       overlay.style.zIndex = 9999;
//       overlay.style.display = 'flex';
//       overlay.style.alignItems = 'center';
//       overlay.style.justifyContent = 'center';

//       // Form HTML
//       overlay.innerHTML = `
//         <form id="resume-edit-form" style="background:#2d1a4d;padding:32px 28px 24px 28px;border-radius:18px;max-width:600px;width:98vw;box-shadow:0 8px 32px rgba(70,54,160,0.18);color:#fff;position:relative;">
//           <h2 style="color:#a34fc7;font-size:1.5rem;font-weight:700;margin-bottom:18px;">Edit Resume</h2>
//           <label>Profile Photo<br>
//             <input type="file" name="photo" accept="image/*" style="margin-bottom:12px;">
//             <img src="${data.photo}" alt="Current Photo" style="display:block;width:80px;height:80px;border-radius:50%;margin:8px 0 16px 0;object-fit:cover;">
//           </label>
//           <label>Name<br>
//             <input type="text" name="name" value="${data.name}" class="input" required>
//           </label><br>
//           <label>Title<br>
//             <input type="text" name="title" value="${data.title}" class="input" required>
//           </label><br>
//           <label>Email<br>
//             <input type="email" name="email" value="${data.email}" class="input" required>
//           </label><br>
//           <label>Phone<br>
//             <input type="text" name="phone" value="${data.phone}" class="input" required>
//           </label><br>
//           <label>Address<br>
//             <input type="text" name="address" value="${data.address}" class="input" required>
//           </label><br>
//           <label>About<br>
//             <textarea name="about" class="textarea" rows="2">${data.about}</textarea>
//           </label><br>
//           <div style="margin-top:18px;display:flex;justify-content:flex-end;gap:12px;">
//             <button type="button" class="button is-light" id="edit-cancel-btn">Cancel</button>
//             <button type="submit" class="button is-primary">Save</button>
//           </div>
//         </form>
//       `;

//       document.body.appendChild(overlay);

//       // Cancel button
//       document.getElementById('edit-cancel-btn').onclick = function() {
//         overlay.style.display = 'none';
//       };

//       // Save handler
//       document.getElementById('resume-edit-form').onsubmit = function(e) {
//         e.preventDefault();
//         if (confirm("Are you sure you want to save this chuchu?")) {
//           const formData = new FormData(this);
//           fetch('/api/resume', {
//             method: 'POST',
//             body: formData
//           })
//           .then(res => res.json())
//           .then(resp => {
//             if (resp.success) {
//               alert('Resume updated!');
//               location.reload();
//             } else {
//               alert('Failed to update resume.');
//             }
//           })
//           .catch(() => alert('Error saving resume.'));
//         }
//       };
//     })
//     .catch(() => alert('Failed to load resume data.'));
// }