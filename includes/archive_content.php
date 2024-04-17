<div class="res--140">
    <div class="inner-wrapper--1680">
        <h1 class="blue-ds pb-1 text-center">Gig Archive</h1>
        <p class="text-center">Travel back through the years with our gig archive showcasing all the bands that have
            played at our events
            over the years.</p>
        <div class="tab-container mt-2">
            <div class="tablink-wrapper">
                <?php
                $data = file_get_contents('content/archive_data.txt');
                $sections = preg_split('/\[year\]/', $data, -1, PREG_SPLIT_NO_EMPTY);
                // Loop through each section (year)
                foreach ($sections as $section) {
                    // Extract year, description, and bands from the section
                    preg_match('/(\d{4})\[\/year\]/', $section, $matches);
                    $year = $matches[1];
                ?>
                <div class="tab">
                    <button class="tablinks"
                        onclick="openTab(event, 'Tab<?php echo $year; ?>')"><?php echo $year; ?></button>
                </div>
                <?php
                }
                ?>
            </div>
            <?php
            // Reset the loop to generate tab content separately
            foreach ($sections as $section) {
                // Extract year, description, and bands from the section
                preg_match('/(\d{4})\[\/year\](.*?)\[\/description\](.*?)\[\/bands\]/s', $section, $matches);
                $year = $matches[1];
                $description = trim($matches[2] ?? ''); // Using null coalescing operator to handle cases where description is not found
                $bands = trim($matches[3] ?? '');
            ?>
            <div id="Tab<?php echo $year; ?>" class="tabcontent" style="display: none;">
                <h3 class="h1 "><?php echo $year; ?></h3>
                <?php if (!empty($description)) : ?>
                <p class="h6 my-2"><?php echo $description; ?></p>
                <?php endif; ?>
                <?php if (!empty($bands)) : ?>
                <p class="h2"><strong>Bands:</strong></p>
                <ul>
                    <?php
                            // Split bands by comma and loop through each band
                            $bands_array = explode(',', $bands);
                            foreach ($bands_array as $band) {
                                echo "<li>$band</li>";
                            }
                            ?>
                </ul>
                <?php endif; ?>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script>
function openFirstTab() {
    var firstTabButton = document.querySelector('.tablinks');
    if (firstTabButton) {
        firstTabButton.click();
    }
}

window.addEventListener('load', openFirstTab);

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none"; // Hide all tab content
        tabcontent[i].classList.remove("active"); // Remove active class from all tab content
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active",
            ""); // Remove active class from all tab buttons
    }
    document.getElementById(tabName).style.display = "flex"; // Display the content of the selected tab
    document.getElementById(tabName).classList.add("active"); // Add active class to the clicked tab content
    evt.currentTarget.className += " active"; // Add active class to the clicked tab button
}
</script>