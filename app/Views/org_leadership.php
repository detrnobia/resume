<section class="section">
    <div class="box equal-box" id="org-card">
        <h2 class="title is-4 has-text-link-dark">Organizational & Leadership Experience</h2>

        <div class="content mb-5">
            <h3 class="title is-6">UPV Komsai.Org</h3>
            <div class="card-row">
                <div>
                    <em class="has-text-info">Vice President for External Affairs</em> | Aug. 2024 – Present
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-komsai-vp', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-komsai-vp" class="desc-content" style="display:none;">
                <li>Official representative in external activities, fostering partnerships.</li>
                <li>Managed official communications and Memorandums of Agreement (MOA).</li>
                <li>Led the Public Relations Committee and outreach initiatives.</li>
                <li>Handled sponsorships, speaker coordination, and formal correspondences.</li>
            </ul>
            <div class="card-row mt-3">
                <div>
                    <em class="has-text-info">Treasurer</em> | Aug. 2023 – July 2024
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-komsai-treas', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-komsai-treas" class="desc-content" style="display:none;">
                <li>Managed financial assets, membership collection, and safekeeping.</li>
                <li>Processed disbursements and maintained documentation.</li>
                <li>Led budgeting and resource allocation via the Finance Committee.</li>
            </ul>
        </div>

        <div class="content mb-5">
            <h3 class="title is-6">Miagao Valley Student Organization</h3>
            <div class="card-row">
                <div>
                    <em class="has-text-info">Finance Head</em> | Aug. 2024 – Present
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-miagao', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-miagao" class="desc-content" style="display:none;">
                <li>Oversaw financial management and resource allocation.</li>
                <li>Coordinated sponsorship for the “Build a Block: WebDev Workshop and Hackathon.”</li>
            </ul>
        </div>

        <div class="content mb-5">
            <h3 class="title is-6">Holwan House Council (UPV Dormitory)</h3>
            <div class="card-row">
                <div>
                    <em class="has-text-info">Treasurer</em> | Aug. 2024 – Present
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-holwan', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-holwan" class="desc-content" style="display:none;">
                <li>Managed budget tracking and expense management.</li>
                <li>Oversaw water fund collection with wing representatives.</li>
            </ul>
        </div>

        <div class="content">
            <h3 class="title is-6">University of the Philippines Antiqueño</h3>
            <div class="card-row">
                <div>
                    <em class="has-text-info">Vice President for Internal Affairs</em> | Aug. 2024 – Present
                </div>
                <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-antiqueno', this)">
                    <span>Show Details</span>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </button>
            </div>
            <ul id="desc-antiqueno" class="desc-content" style="display:none;">
                <li>Spearheaded the AAP Caravan with UPV Ugnayan ng Pahinungòd/Oblation Corps.</li>
                <li>Coordinated committee member distribution for workload efficiency.</li>
                <li>Oversaw SOA paperwork for events.</li>
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