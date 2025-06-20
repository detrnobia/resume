<div class="box equal-box" id="awards-card">
    <h2 class="title is-4 has-text-link-dark">Awards & Participation</h2>

    <div class="content mb-5">
        <div class="card-row">
            <div>
                <h3 class="title is-6">Komsai Hack 2024: Agri-Vision</h3>
                <em class="has-text-info">Participant</em> | April 2024
            </div>
            <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-komsai-hack', this)">
                <span>Show Details</span>
                <span class="icon"><i class="fas fa-chevron-down"></i></span>
            </button>
        </div>
        <ul id="desc-komsai-hack" class="desc-content" style="display:none;">
            <li>Designed a Figma prototype dashboard (Tanom Tahum) for farm and livestock management.</li>
        </ul>
    </div>

    <div class="content mb-5">
        <div class="card-row">
            <div>
                <h3 class="title is-6">MathO-tukanay: Inter-Org Mathematics Quiz Bee</h3>
                <em class="has-text-info">Participant</em> | March 2024
            </div>
            <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-math-quiz', this)">
                <span>Show Details</span>
                <span class="icon"><i class="fas fa-chevron-down"></i></span>
            </button>
        </div>
        <ul id="desc-math-quiz" class="desc-content" style="display:none;">
            <li>Represented UPV Komsai.Org in quiz bee organized by UPV Mathematics Circle.</li>
        </ul>
    </div>

    <div class="content mb-5">
        <div class="card-row">
            <div>
                <h3 class="title is-6">Unlocking UX/UI Essentials Webinar</h3>
            </div>
            <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-uxui', this)">
                <span>Show Details</span>
                <span class="icon"><i class="fas fa-chevron-down"></i></span>
            </button>
        </div>
        <ul id="desc-uxui" class="desc-content" style="display:none;">
            <li>Participated in a webinar organized by WVSU focused on user-centered digital design.</li>
        </ul>
    </div>

    <div class="content">
        <div class="card-row">
            <div>
                <h3 class="title is-6">Two-Sentence Terrors</h3>
                <em class="has-text-info">1st Place</em> | Dec. 2023
            </div>
            <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-terrors', this)">
                <span>Show Details</span>
                <span class="icon"><i class="fas fa-chevron-down"></i></span>
            </button>
        </div>
        <ul id="desc-terrors" class="desc-content" style="display:none;">
            <li>Won in a horror story competition by UPV Literati.</li>
        </ul>
    </div>
</div>

<script>
function toggleDesc(id, btn) {
    var desc = document.getElementById(id);
    if (desc.style.display === "none" || desc.style.display === "") {
        desc.style.display = "block";
        btn.querySelector('span').textContent = "Hide Details";
        btn.querySelector('.icon i').classList.remove('fa-chevron-down');
        btn.querySelector('.icon i').classList.add('fa-chevron-up');
    } else {
        desc.style.display = "none";
        btn.querySelector('span').textContent = "Show Details";
        btn.querySelector('.icon i').classList.remove('fa-chevron-up');
        btn.querySelector('.icon i').classList.add('fa-chevron-down');
    }
}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">