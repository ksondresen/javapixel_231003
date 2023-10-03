<?php

// Enables page title to set from wordpress admin backend 
function k_add_title_tag_from_wp() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'k_add_title_tag_from_wp'); 


//******************Storing Form Data"CONTACT FORM" in WP database********************

    // Step 1: Capture Form Data from "CONTATC FORM"
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_submit_button'])) {
        // Assume your form fields are named 'radio_option', 'text_field', and 'email_field'
        $radio_data = $_POST['radio_option'];
        $text_data = $_POST['text_field'];
        $email_data = $_POST['email_field'];

        // Step 2: Sanitize and Validate
        $radio_data = sanitize_text_field($radio_data);
        $text_data = sanitize_text_field($text_data);
        $email_data = sanitize_email($email_data);

        // Validate email
        if (!filter_var($email_data, FILTER_VALIDATE_EMAIL)) {
            echo "<script>console.log('Invalid Email');</script>"; // will show up in the browser when an invalid email is entered
            return;
        }
        
        // Step 3: Insert into Database
        global $wpdb;
        $table_name = 'wp_contact_form';// Replace with your table name
        
        $wpdb->insert(
            $table_name,
            array(
                'radio_button_fixed' => $radio_data, // Replace with your column name
                'radio_button_textfield' => $text_data,  // Replace with your column name
                'email_address' => $email_data  // Replace with your column name
            ),
            array('%s', '%s', '%s') // Data format ('%s' as string)
        );

        // After inserting into the database - send email to admin with notification about form values
        
        
    }


//******************Reviewing "CONTACT FORM" Data in table Admin Backend ********************

    add_action('admin_menu', 'my_custom_admin_menu');

    function my_custom_admin_menu() {
      add_menu_page('Contact Form submissions', 'Contact Form submission', 'manage_options', 'contact_form_submission', 'display_form_data');
    }
    
    function display_form_data() {
      global $wpdb;
      $table_name = 'wp_contact_form';// Replace with your table name
    
      $results = $wpdb->get_results("SELECT * FROM $table_name");
      
      // Display data (You can format this better)
      echo "<table border='1' style='background-color: yellow;'>";
      echo "<tr><th>ID</th><th>Email Address</th><th>Fixed Radio Button</th><th>Textfield Radio Button</th><th>WP User ID</th></tr>";
      
      foreach ($results as $row) {
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->email_address . "</td>"; 
        echo "<td>" . $row->radio_button_fixed . "</td>";
        echo "<td>" . $row->radio_button_textfield . "</td>";
        echo "<td>" . $row->wp_user_id . "</td>";
        echo "</tr>";
      }
      
      echo "</table>";
    }
    


?>