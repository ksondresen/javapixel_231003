
<footer style="margin-top: 400px;display:flex; justify-content: center">    

    <div class="footer-bar-container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%;background-color: #434343ff; color: white; ">
      <h3 style="margin: 80px auto 80px auto;">Over 15 år med forøyde kunder</h3>
      <div style="width: 1100px; margin: 50px auto; display: flex; gap: 20px;align-items: center; justify-content: center; flex-wrap: wrap;">
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\civitalogo.jpg" 
            id="civita_logo">          
          </div>
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\white_logo_print_use.webp"             
            id="amnesty_logo">          
          </div>
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\Norsk_klimastiftelse_logo_2017_bokmal.png"             
            id="klimastiftelsen_logo">          
          </div>
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\Kulturhuset.jpeg" 
            id="kulturhuset_logo">          
          </div>
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\nho_logo.png" 
            id="nho_logo">          
          </div>
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\prio_logo.png" 
            id="prio_logo">          
          </div>
          <div class="wrapper_logo_from_customer">
            <img 
            src="wp-content\themes\javapixel\assets\images\uit_logo.png" 
            id="uit_logo">          
          </div>
      </div>
    
      <div class="footer-contatct-info-container" style="display: flex; justify-content: center; gap: 10px; background-color: #434343ff; color: white; padding: 50px 30px; margin: 30px auto;">
        <div class="footer-icon-element-square-yellow" style="width:20px; aspect-ratio:1/1; background-color: yellow"></div>
        <p>kontakt@javapixel.no</p>
        <p>|</p>
        <p>tlf 98 60 61 58</p>
        <p>|</p>
        <p>St. Olavsgate 6, 3126 Tønsberg</p>
      </div>
    </div>

  <?php get_template_part('templates/modal-our-services'); ?>

  </footer>
  
  
  <script>
    // Function to toggle the text field visibility
    function toggleTextField() {
      const radioOther = document.getElementById("optionOther");
      const textField = document.getElementById("textField");
      
      if (radioOther.checked) {
        textField.style.display = "block";
      } else {
        textField.style.display = "none";
      }
    }
  </script>
  
</body>
</html>


