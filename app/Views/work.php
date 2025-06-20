
    <div class="content mb-5">
        <div class="card-row">
            <h2 class="title is-4 has-text-link-dark">Work Experience</h2>
            <div>
                <h3 class="title is-6">University of the Philippines Visayas</h3>
                <em class="has-text-info">Student Assistant</em> | Sept. 2023 – Present
            </div>
            <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-upv-sa', this)">
                <span>Show Details</span>
                <span class="icon"><i class="fas fa-chevron-down"></i></span>
            </button>
        </div>
        <ul id="desc-upv-sa" class="desc-content">
            <li>Assigned to Balay Kanlaon and Balay Lampirong dorms.</li>
            <li>Assisted dormers and guests via in-person, email, and phone inquiries.</li>
            <li>Performed data entry, documentation, and clerical tasks.</li>
        </ul>
    </div>

    <div class="content mb-5">
        <div class="card-row">
            <div>
                <h3 class="title is-6">UPV Ugnayan ng Pahinungod Oblation Corps</h3>
                <em class="has-text-info">Volunteer</em> | May 2024 – Present
            </div>
            <button class="button is-small show-details-btn" type="button" onclick="toggleDesc('desc-upv-vol', this)">
                <span>Show Details</span>
                <span class="icon"><i class="fas fa-chevron-down"></i></span>
            </button>
        </div>
        <ul id="desc-upv-vol" class="desc-content">
            <li>Participated in community outreach and public service events.</li>
        </ul>
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