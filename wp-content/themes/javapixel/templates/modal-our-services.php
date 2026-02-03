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
        margin: 0;
        width: 160px;
        background-color: #f3f3f3ff;
        padding: 14px 10px;
        color: #a7a7a7;
        border-radius: 6px;
        font-size: 13px;
        text-align: center;
        cursor: pointer;
    }

    .tab-link:hover {        
        background-color: #baf0ff;                
        color: #060d41;
        background-color: #ea3a23;
        background: linear-gradient(0deg, #de1a00, #ff530c);
        background: linear-gradient(180deg, #ff7d47, #ff4b34);
        outline: solid 2px #c01e08;
        color: white;
    }

    .tab-link.active {        
        background-color: #cdf4ffff;                
        color: #060d41;
        background-color: #ff5c47ff;
        background: linear-gradient(180deg, #ff7d47, #ff4b34);
        /*background: linear-gradient(0deg, #de1a00, #ff530c);*/
        color: white;    
        font-weight: 400;
    }

    .tab-content {
        
    }
    
</style>
 
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div id="myModalContent" class="modal-content">
    <span class="close" id="close-modal-button">&times;</span>
    <div class="modal-container" style="margin-top: 45px; display: flex; gap: 30px; align-items: top; min-height: 400px" >
        <nav class="nav-wp-posts-our-services" style="height: 100%; background-color: white">
            <ul style="unset:all; list-style-type: none; display:flex; flex-direction: column; align-items: start; gap: 10px 0; margin: unset; padding: unset;">                
                <li><a href="#" class="tab-link" data-tab="tab1" data-permalink="?p=6">Videostreaming og <br>podkastproduksjon</a></li>
                <li><a href="#" class="tab-link" data-tab="tab2" data-permalink="?p=7">Nettside og <br>applikasjonsutvikling</a></li>
                <li><a href="#" class="tab-link" data-tab="tab3" data-permalink="?p=8">Analyse og brukeradferd <br>- digital måloppnåelse</a></li>
            </ul>
        </nav>
            
            <div class="tab-content" id="tab1">
                <!-- WordPress Post 1 Content Here -->
                <img class="image_video_streaming" src="wp-content\themes\javapixel\assets\images\260129_video_streaming_og_podcast.png" >                                
                <div class="wrapper_for_modal_text">
                    <h3>Ønsker du videostreaming av ditt event – der teknikken fungerer?</h3>
                    <p>
                        Med over 15 års erfaring innen live videostreaming har vi svært god kunnskap om hvordan vi kan sørge for at ditt arrangement strømmes til alle kanalene du måtte ønske, på en profesjonell måte.
                    </p>
                    </br>                
                    <p>
                        Vårt oppsett fasiliterer:                
                    </p>
                        <ul>
                            <li>Flerkameraproduksjon med profesjonelt lydoppsett</li>
                            <li>Dersom en gjest deltar via Zoom, integrerer vi dette sømløst i sendingen</li>
                            <li>Strømming til flere plattformer samtidig (YouTube, Facebook m.m.)</li>
                            <li>Integrasjon av PowerPoint og andre mediefiler</li>
                        </ul>
                    </p>
                    <p>
                        Med Javapixel som samarbeidspartner er du sikret en trygg løsning for videostreaming fra A til Å.
                    </p>
                </div>
            </div>
            
            <div class="tab-content" id="tab2">
                <!-- WordPress Post 2 Content Here -->
                <img class="image_web_site_development" src="wp-content\themes\javapixel\assets\images\web_site_development.png" >                                
                <div class="wrapper_for_modal_text">
                    <h3>Presenter ditt budskap – på en moderne nettside som engasjerer</h3>                
                    <p>
                        <!--
                        Når vi møter kunder hører vi ofte at "nettsiden må oppdateres" eller "at flere av funksjonene som fungerte når nettsiden ble lansert har slutte å fungere". 
                        Når vi bygger nettsider er vi opptatt av å bygge kode som minimerer teknisk gjeld. 
                        -->
                        Vi har lang erfaring med å sitte på din side av bordet, og vet hva som gir trygghet og verdiskaping når man driver en nettside. Derfor jobber vi alltid for at våre kunder skal få:
                    </p>
                        <ul>                        
                            <li>Gode brukeropplevelser og effektiv kvalitetssikring, der det er enkelt å fange opp om kundene opplever hindringer i brukerreisen.</li>
                            <li>Fleksibilitet og tilrettelegging for kontinuerlig utvikling. Ønsker du å endre eller legge til nye elementer på nettsiden, gjør vi dette enkelt og kostnadseffektivt.</li>                        
                            <li>Tekniske løsninger som fungerer år etter år, uten avbrytelser. Når kunden har en nettside som fungerer, skapes verdier for alle.</li>                                     
                            <li>Nettsider og apper bygget på åpne plattformer, der kundene står fritt til å bytte leverandør uten dyre abonnementsløsninger.</li>           
                        </ul>
                    </p>                    
                    <p>
                        Vi kan bygge alt, og det vi er spesialister på er:
                    </p>
                        <ul>
                            <li>Å gjøre din podkast om til et nettkurs (teksting, quiz m.m.)</li>
                            <li>AI-integrasjon – når du ønsker at deler av arbeidet skal løses av AI</li>
                            <li>Tekniske løsninger som krever minimalt vedlikehold og fungerer år etter år</li>
                        </ul>
                    </p>                
                    <p>
                            Ta kontakt for en uforpliktende prat, så kan vi hjelpe deg i gang med å utvikle en nettside eller applikasjon som gir verdiskaping og står seg på lang sikt.
                    </p>
                </div>
            </div>

            <div class="tab-content" id="tab3">
                <!-- WordPress Post 3 Content Here -->
                <img class="image_web_site_analytics" src="wp-content\themes\javapixel\assets\images\web_site_analytics.png">                                
                <div class="wrapper_for_modal_text">
                    <h3>Hva gjør egentlig brukerne dine når de besøker nettsiden – og hvem er de?</h3>                
                    <p>
                        Gode avgjørelser tas på erfaringsgrunnlag. Når du kjenner publikumet ditt og forstår hvordan de navigerer i innholdet ditt, kan du ta bedre beslutninger.
                    </p>
                        <ul>
                            <li>Datainnsamling, analyse og filtrering av støy</li>
                            <li>Skjermopptak av brukerreisen</li>
                            <li>A/B testing</li>
                            <li>E-post- og SMS-varsling når besøkende på siden din gjør noe du ønsker å få beskjed om</li>                        
                        </ul>
                    </p>                
                    <p>
                            Klar for å ta bedre beslutninger? Ta kontakt for en uforpliktende prat om hvordan vi kan hjelpe deg videre.
                    </p>
                </div>
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
        window.history.replaceState({}, '', '/?p=6');
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

