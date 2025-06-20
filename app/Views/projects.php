<section class="section">
    <div class="box equal-box" id="projects-card">
        <h2 class="title is-4 has-text-link-dark">Projects</h2>

        <div class="content mb-5">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">Pet Simulator <span class="tag is-light is-success ml-2">Full Stack Developer</span></h3>
                    <a href="https://github.com/darahvia/156-Midterms-Pet-Simulator.git" target="_blank">github/PetSimulator</a>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-pet-sim', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-pet-sim" class="desc-content" style="display:none;">
                <li>Mobile Game Application inspired by Tamagotchi, where users can adopt, nurture, feed, play with, and care for their digital companion</li>
            </ul>
        </div>

        <div class="content mb-5">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">Vital Vantage <span class="tag is-light is-info ml-2">Backend Developer</span></h3>
                    <a href="https://github.com/falsense/VitalVantage.git" target="_blank">github/VitalVantage</a> | 
                    <em>Aug. 2024 – Dec. 2024</em>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-vital', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-vital" class="desc-content" style="display:none;">
                <li>Developed healthcare assistant app for appointments, records, e-certificates.</li>
                <li>Integrated Firebase authentication.</li>
            </ul>
        </div>

        <div class="content mb-5">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">Dormlink <span class="tag is-light is-success ml-2">Full Stack Developer</span></h3>
                    <a href="https://github.com/elishandreaj/dorm-database.git" target="_blank">github/dorm-database</a> | 
                    <em>April 2024 – May 2024</em>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-dormlink', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-dormlink" class="desc-content" style="display:none;">
                <li>Built web app for UPV dorm search and profile management using HTML, CSS, JS, PHP, MySQL.</li>
                <li>Implemented role-based access.</li>
            </ul>
        </div>

        <div class="content mb-5">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">TagAlaga <span class="tag is-light is-warning ml-2">UI/UX Designer</span></h3>
                    <a href="https://figma.com/@TagAlaga" target="_blank">figma/TagAlaga</a> | 
                    <em>Aug. 2024 – Dec. 2024</em>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-tagalaga', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-tagalaga" class="desc-content" style="display:none;">
                <li>Designed mobile app prototype to assist Filipino caregivers.</li>
            </ul>
        </div>

        <div class="content mb-5">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">UPV DPSM Website <span class="tag is-light is-primary ml-2">Content Member</span></h3>
                    UPV DPSM | <em>Nov. 2023 – Aug. 2024</em>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-dpsm', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-dpsm" class="desc-content" style="display:none;">
                <li>Managed updates for BS Statistics and Computer Science course syllabus pages.</li>
            </ul>
        </div>

        <div class="content mb-5">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">Permilogical: A Digitalized Logbook for UP Dorm Permit</h3>
                    <a href="https://github.com/permilogical" target="_blank">github/permilogical</a>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-permilogical', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-permilogical" class="desc-content" style="display:none;">
                <li>Java-based terminal app to streamline dormitory permit filing at UPV.</li>
            </ul>
        </div>

        <div class="content">
            <div class="card-row">
                <div>
                    <h3 class="title is-6">RomUvot: An Automated Roaming Robot</h3>
                    <em>Feb. 2022 – May 2022</em>
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-romuvot', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-romuvot" class="desc-content" style="display:none;">
                <li>Arduino-based autonomous robot for disinfection during COVID-19.</li>
                <li>Included UV light and app-controlled navigation.</li>
            </ul>
        </div>
    </div>
</section>

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