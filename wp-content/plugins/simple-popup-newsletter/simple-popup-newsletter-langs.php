<?php

$box_lang = array();
$box_options = array();

function get_langwords() {
  global $wpdb, $box_lang, $box_options;

  $box_lang['option_label1'] = __('Newsletter subscription! Add your email address and your name, than click subscription button.', 'spn');
  $box_lang['option_label2'] = __('Enter your email address for unsubscription.', 'spn');
  $box_lang['option_name'] = __('Your name:', 'spn');
  $box_lang['option_email'] = __('Email address:', 'spn');
  $box_lang['option_button1'] = __('Subscription', 'spn');
  $box_lang['option_button2'] = __('Unsubscription', 'spn');
  $box_lang['option_exit'] = __('Exit', 'spn');

  $sql = "SELECT * FROM ".$wpdb->prefix."newsletter_popup_options ORDER BY option_id LIMIT 0, 1;";
  $options = array();
  $options = $wpdb->get_results($sql);
  foreach($options as $box_options) {
    break;
  }

}

function simple_popup_newsletter_langs() {
  global $wpdb, $box_lang, $box_options;

  if(isset($_POST['submit1'])) {

    $sql = "UPDATE ".$wpdb->prefix."newsletter_popup_options SET ".
           "option_label1 = '".strrep($_POST['option_label1'])."', ".
           "option_label2 = '".strrep($_POST['option_label2'])."', ".
           "option_name = '".strrep($_POST['option_name'])."', ".
           "option_email = '".strrep($_POST['option_email'])."', ".
           "option_button1 = '".strrep($_POST['option_button1'])."', ".
           "option_button2 = '".strrep($_POST['option_button2'])."', ".
           "option_exit = '".strrep($_POST['option_exit'])."' ".
           "WHERE option_id =  '1' ";
    $wpdb->query($sql);
    
  }

  get_langwords();
    

  echo '<h3>'.__('Language Text Options', 'spn').'</h3>'.
  '<form id="popup_box_langs" name="popup_box_langs" method="post" action="#"><table class="tbl_wrapper">';
  foreach($box_lang as $k => $v) {
    $option = isset($box_options->$k)?$box_options->$k:"";
    echo '<tr><td style="text-align: right; width: 400px;">'.$box_lang[$k].'</td><td> ..: </td><td><textarea id="'.$k.'" name="'.$k.
    '" rows="3" cols="35" wrap="virtual" maxlength="100" style="width: 300px;">'.$option.'</textarea></td></tr>';
  }
  echo '</table><br />';
  echo __('Leave the value empty, if you want the text in English.', 'spn').'<br />';
  echo '<input id="submit1" name="submit1" class="button button-primary" type="submit" value="'.__('Save Changes', 'spn').'" /></form>';
}


?>