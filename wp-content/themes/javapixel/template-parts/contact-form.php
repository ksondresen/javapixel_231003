<section class="section-with-contact-form">
        <div class="laptop-image" style="width: 350px; border-radius:5px; overflow: hidden">
            <img src="wp-content\themes\javapixel\assets\images\230919_laptop_and_plant_photo.png" style="width:100%">
        </div>        
        <form method="post" action="http://localhost/javapixel/" class="contact-form-radio-button" style="display:flex; flex-direction: column;gap:10px; padding-left: 20px">
            <fieldset style="all: unset; display:flex; flex-direction: column;gap:10px; ">
            <legend style="
                margin-bottom:13px;
                width: 300px;

                ">                
                Vår kundemøter er fullstendig fri for slitsomme innsalg og kjøpspress. 
                Vi er ikke selgere, og er derfor notorisk dårlige på å fikse deals. 
                Men vi elsker å lage gode nettsider og synes alltid det er gøy og bli kjent med nye prosjekter. 
                Vi kan love deg at våre møter er lave skuldre og gode løsninger, om du skulle trenge oss. 

                <br><br>Ønsker du et gratis og uforpliktende møte med oss?
            </legend>
            
            <label 
                style="
                    margin-left:5px;
                    display: flex;
                    gap: 5px;
                    align-items: center;
                    "
                >
                <input type="radio" name="radio_option" id="option1" value="Option 1" onclick="toggleTextField()" checked >
                Ja!
            </label>
            <!--
                <label 
                    style="
                        margin-left:5px;
                        display: flex;
                        gap: 5px;
                        align-items: center;
                        "
                    >
                    <input type="radio" name="radio_option" id="option2" value="Option 2" onclick="toggleTextField()">
                    Jeg har en nettside som trenger å bli bedre
                </label>

                <label 
                    style="
                        margin-left:5px;
                        display: flex;
                        gap: 5px;
                        align-items: center;
                        "
                    >
                    <input type="radio" name="radio_option" id="option3" value="Option 2" onclick="toggleTextField()">
                    Jeg ønsker å lage en helt ny nettside
                </label>
                
                <label 
                    style="
                        margin-left:5px;
                        display: flex;
                        gap: 5px;
                        align-items: center;
                        "
                    >
                    <input type="radio" name="radio_option" id="optionOther" value="Other" onclick="toggleTextField()">
                    Annet
                </label>
            -->
            
            <!-- Hidden text field that will be shown when 'Other' is selected -->
            <div id="textField" style="display:none;">
                <!--<label for="otherText">Skriv litt her om hva det gjelder</label>-->
                <input type="text" id="otherText" name="text_field" style="all: unset; width: 100%;background-color:#f3f3f3ff; padding: 10px; border-radius: 5px" placeholder="Skriv litt her om hva det gjelder">
            </div>

            <div class="input-container-email-and-submit" style="margin-top: 10px">
                <!--<label>Din epost</label>-->    
                <input type="email" name="email_field" placeholder="Din epost" style="all: unset;background-color:#f3f3f3ff; padding: 10px; border-radius: 5px">
                <input type="submit" name="form_submit_button" value="Send" style="all: unset;background-color:#cdf4ffff; padding: 10px; border-radius: 5px">
            </div>
            </fieldset>


        </form>
    </section>