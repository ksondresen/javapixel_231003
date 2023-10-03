<section class="section-with-contact-form" style="display:flex;justify-content:center; align-items:center; margin-top: 170px">
        <div class="laptop-image" style="width: 350px; border-radius:5px; overflow: hidden">
            <img src="wp-content\themes\javapixel\assets\images\230919_laptop_and_plant_photo.png" style="width:100%">
        </div>        
        <form method="post" action="http://localhost/javapixel/" class="contact-form-radio-button" style="display:flex; flex-direction: column;gap:10px; padding-left: 20px">
            <fieldset style="all: unset; display:flex; flex-direction: column;gap:10px; ">
            <legend style="margin-bottom:13px">Ønsker du et gratis og uforpliktende møte med oss?</legend>
            
            <label style="margin-left:5px">
                <input type="radio" name="radio_option" id="option1" value="Option 1" onclick="toggleTextField()" checked >
                Jeg har en nettside som trenger å bli bedre
            </label>
            
            <label style="margin-left:5px">
                <input type="radio" name="radio_option" id="option2" value="Option 2" onclick="toggleTextField()">
                Jeg ønsker å lage en helt ny nettside
            </label>
            
            <label style="margin-left:5px">
                <input type="radio" name="radio_option" id="optionOther" value="Other" onclick="toggleTextField()">
                Annet
            </label>
            
            <!-- Hidden text field that will be shown when 'Other' is selected -->
            <div id="textField" style="display:none;">
                <!--<label for="otherText">Skriv litt her om hva det gjelder</label>-->
                <input type="text" id="otherText" name="text_field" style="all: unset; width: 100%;background-color:#f3f3f3ff; padding: 10px; border-radius: 5px" placeholder="Skriv litt her om hva det gjelder">
            </div>

            <div class="input-container-email-and-submit" style="margin-top: 10px">
                <!--<label>Din epost</label>-->    
                <input type="email" name="email_field" placeholder="Din epost" style="all: unset;background-color:#f3f3f3ff; padding: 10px; border-radius: 5px">
                <input type="submit" name="form_submit_button" value="Submit" style="all: unset;background-color:#cdf4ffff; padding: 10px; border-radius: 5px">
            </div>
            </fieldset>


        </form>
    </section>