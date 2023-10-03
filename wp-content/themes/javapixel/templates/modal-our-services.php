<style> 
    .tab-content {
        display: none;
    }
    .tab-content.active {
        display: block;
    }
    
    .tab-link {
        all: unset; 
        display: block;
        margin:0;
        width: 150px;
        background-color: #f3f3f3ff;        
        padding: 10px;
        color: #a7a7a7; 
        border-radius: 5px;       
    }

    .tab-link:hover {        
        background-color: #baf0ff;                
        color: #060d41;
    }

    .tab-link.active {        
        background-color: #cdf4ffff;                
        color: #060d41;
    }

    .tab-content {
        padding: 10px 30px 30px 20px;
    }
    
</style>
 
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div id="myModalContent" class="modal-content">
    <span class="close" id="close-modal-button">&times;</span>
    <div class="modal-container" style="margin-top: 45px; display: flex; align-items: top; min-height: 400px" >
        <nav class="nav-wp-posts-our-services" style="height: 100%; background-color: white">
            <ul style="unset:all; list-style-type: none; padding-left: 30px; display:flex; flex-direction: column; align-items: start; gap: 10px 0">                
                <li><a href="#" class="tab-link" data-tab="tab1" data-permalink="?p=6">Programmering</a></li>
                <li><a href="#" class="tab-link" data-tab="tab2" data-permalink="?p=7">Web-design</a></li>
                <li><a href="#" class="tab-link" data-tab="tab3" data-permalink="?p=8">Web-analyse</a></li>
            </ul>
        </nav>
            
            <div class="tab-content" id="tab1">
                <!-- WordPress Post 1 Content Here -->
                <?php
                    $post1 = get_post(6); // Replace with your post ID
                    echo '<h3 style="line-height: unset; margin: 10px 0">' . apply_filters('the_title', $post1->post_title) . '</h3>';
                    echo apply_filters('the_content', $post1->post_content);
                ?>
            </div>
            
            <div class="tab-content" id="tab2">
                <!-- WordPress Post 2 Content Here -->
                <?php
                    $post1 = get_post(7); // Replace with your post ID
                    echo '<h3 style="line-height: unset; margin: 10px 0">' . apply_filters('the_title', $post1->post_title) . '</h3>';
                    echo apply_filters('the_content', $post1->post_content);
                ?>
            </div>

            <div class="tab-content" id="tab3">
                <!-- WordPress Post 3 Content Here -->
                <?php
                    $post1 = get_post(8); // Replace with your post ID
                    echo '<h3 style="line-height: unset; margin: 10px 0">' . apply_filters('the_title', $post1->post_title) . '</h3>';
                    echo apply_filters('the_content', $post1->post_content);
                ?>
            </div>
        

    </div>
    </div>

</div>

<!-- Javascript -->
<script>

// When modal is open - clicking tabs (in the nav menu) will display correct wp-posts
const tabs = document.querySelectorAll(".tab-link");
tabs.forEach(function(tab) {
    // When a tab is clicked in the nav menu
    tab.addEventListener("click", function(e) {
        // 1. Prevent all default behaviour (ie navigate to a different page or change the URL)
        e.preventDefault();
        // 2. Reset/hide/remove active class from all tab-content
        document.querySelectorAll(".tab-content").forEach(function(content) {
            content.classList.remove("active");
        });
        // 3. Reset/hide/remove active class from all tab-links
        tabs.forEach(function(innerTab) {
            innerTab.classList.remove("active");
        });
        // 4. Add active class to clicked tab-link
        this.classList.add("active");

        // 5. Add active class to corresponding tab-content
        const selectedTab = this.getAttribute("data-tab");
        document.getElementById(selectedTab).classList.add("active");

        // 6. Update Modal URL with the permalink of the selected (active) wp post
        const permalink = this.getAttribute("data-permalink");
        window.history.pushState({tab: selectedTab}, "", permalink);
    });
});


// Open and close behaviour for the Modal
document.addEventListener("DOMContentLoaded", function() {

    // Get the modal and its content
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var openBtn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    function openModal() {
        modal.style.display = "block";
        document.body.classList.add("modal-open");
    }

    function closeModal() {
        modal.style.display = "none";
        document.body.classList.remove("modal-open");
            // Update the URL without reloading the page
            const url = new URL(window.location.href); 
            url.searchParams.delete('p'); // 'p' is the query parameter you want to remove    
            window.history.replaceState({}, '', url.toString());   // Update the URL without reloading the page
    }

    // In case of refresh/reload - if the URL contains a post-id for a wp-post - open the modal programatically - and select correct nav tab and post
    const urlParams = new URLSearchParams(window.location.search);
    const postParam = urlParams.get('p');
    
    if (postParam) {  
    const selectedTabElement = document.querySelector(`[data-permalink="?p=${postParam}"]`);  // URL contains a post-id? 
        if (selectedTabElement) {
            openModal(); //opens the modal programatically
            }
        if (selectedTabElement) {
                selectedTabElement.click(); //selects correct nav tab and post
            }
    }


    // When the user clicks the "open modal button":
    openBtn.addEventListener("click", function() {
        // 1. open the modal
        openModal();            
        // 2. remove/reset/hide previousley activated wp-posts and links (from previous clicks) 
        document.querySelectorAll(".tab-content, .tab-link").forEach(function(element) {element.classList.remove("active");});
        // 3. display/activate the first WordPress post (default post)
        document.querySelector(".tab-link").classList.add("active");
        document.getElementById("tab1").classList.add("active"); 
        // 4. updates url with wp-post permalink
        window.history.replaceState({}, '', 'http://localhost/javapixel/?p=6');
    });

    // When the user clicks on <span> (x), close the modal
    span.addEventListener("click", function() {
        closeModal();
    });

    // When the user clicks anywhere outside of the modal, close it
    modal.addEventListener("click", function(event) {
        const modalContent = document.querySelector(".modal-content");
        
        if (modalContent.contains(event.target)) {
            return; // Click is inside the modal content, do nothing (end function here)
        }
        
        closeModal(); // Click must be outside the modal content, close the modal
    });   
});

 
</script>

