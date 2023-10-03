
<footer style="margin-top: 400px;display:flex; justify-content: center">
    <div class="footer-bar-container" style="display: flex; justify-content: center; gap: 10px; width: 100%;background-color: #434343ff; color: white; padding: 50px 30px; ">
      <div class="footer-icon-element-square-yellow" style="width:20px; aspect-ratio:1/1; background-color: yellow"></div>
      <p>kontakt@javapixel.no</p>
      <p>|</p>
      <p>tlf 98 60 61 58</p>
      <p>|</p>
      <p>St. Olavsgate 6, 3126 Tønsberg</p>
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


