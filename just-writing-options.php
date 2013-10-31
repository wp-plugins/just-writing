<?php
/*
Copyright (c) 2013 by Greg Ross

This software is released under the GPL v2.0, see license.txt for details
*/

/*
 *	This function returns either on or off depending on the state of an HTML checkbox 
 *  input field returned from a post command.
 */
function just_writing_get_checked_state( $value )
	{
	if( $value == 'on' ) 
		{
		return 'on';
		}
	else
		{
		return 'off';
		}
	}

/*
 *	This function is called to save the user profile settings for Just Writing.
 */
function just_writing_save_user_profile_fields( $user_id )
	{
	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
	update_user_meta( $user_id, 'just_writing_enabled', just_writing_get_checked_state( $_POST['just_writing_enabled'] ) );
	update_user_meta( $user_id, 'just_writing_bold', just_writing_get_checked_state( $_POST['just_writing_bold'] ) );
	update_user_meta( $user_id, 'just_writing_italics', just_writing_get_checked_state( $_POST['just_writing_italics'] ) );
	update_user_meta( $user_id, 'just_writing_ul', just_writing_get_checked_state( $_POST['just_writing_ul'] ) );
	update_user_meta( $user_id, 'just_writing_nl', just_writing_get_checked_state( $_POST['just_writing_nl'] ) );
	update_user_meta( $user_id, 'just_writing_quotes', just_writing_get_checked_state( $_POST['just_writing_quotes'] ) );
	update_user_meta( $user_id, 'just_writing_media', just_writing_get_checked_state( $_POST['just_writing_media'] ) );
	update_user_meta( $user_id, 'just_writing_link', just_writing_get_checked_state( $_POST['just_writing_link'] ) );
	update_user_meta( $user_id, 'just_writing_unlink', just_writing_get_checked_state( $_POST['just_writing_unlink'] ) );
	update_user_meta( $user_id, 'just_writing_strike', just_writing_get_checked_state( $_POST['just_writing_strike'] ) );
	update_user_meta( $user_id, 'just_writing_under', just_writing_get_checked_state( $_POST['just_writing_under'] ) );
	update_user_meta( $user_id, 'just_writing_remove', just_writing_get_checked_state( $_POST['just_writing_remove'] ) );
	update_user_meta( $user_id, 'just_writing_left', just_writing_get_checked_state( $_POST['just_writing_left'] ) );
	update_user_meta( $user_id, 'just_writing_center', just_writing_get_checked_state( $_POST['just_writing_center'] ) );
	update_user_meta( $user_id, 'just_writing_right', just_writing_get_checked_state( $_POST['just_writing_right'] ) );
	update_user_meta( $user_id, 'just_writing_outdent', just_writing_get_checked_state( $_POST['just_writing_outdent'] ) );
	update_user_meta( $user_id, 'just_writing_indent', just_writing_get_checked_state( $_POST['just_writing_indent'] ) );
	update_user_meta( $user_id, 'just_writing_p', just_writing_get_checked_state( $_POST['just_writing_p'] ) );
	update_user_meta( $user_id, 'just_writing_h1', just_writing_get_checked_state( $_POST['just_writing_h1'] ) );
	update_user_meta( $user_id, 'just_writing_h2', just_writing_get_checked_state( $_POST['just_writing_h2'] ) );
	update_user_meta( $user_id, 'just_writing_h3', just_writing_get_checked_state( $_POST['just_writing_h3'] ) );
	update_user_meta( $user_id, 'just_writing_h4', just_writing_get_checked_state( $_POST['just_writing_h4'] ) );
	update_user_meta( $user_id, 'just_writing_h5', just_writing_get_checked_state( $_POST['just_writing_h5'] ) );
	update_user_meta( $user_id, 'just_writing_h6', just_writing_get_checked_state( $_POST['just_writing_h6'] ) );
	update_user_meta( $user_id, 'just_writing_address', just_writing_get_checked_state( $_POST['just_writing_address'] ) );
	update_user_meta( $user_id, 'just_writing_pf', just_writing_get_checked_state( $_POST['just_writing_pf'] ) );
	update_user_meta( $user_id, 'just_writing_spell', just_writing_get_checked_state( $_POST['just_writing_spell'] ) );
	update_user_meta( $user_id, 'just_writing_more', just_writing_get_checked_state( $_POST['just_writing_more'] ) );
	update_user_meta( $user_id, 'just_writing_char', just_writing_get_checked_state( $_POST['just_writing_char'] ) );
	update_user_meta( $user_id, 'just_writing_undo', just_writing_get_checked_state( $_POST['just_writing_undo'] ) );
	update_user_meta( $user_id, 'just_writing_redo', just_writing_get_checked_state( $_POST['just_writing_redo'] ) );
	update_user_meta( $user_id, 'just_writing_help', just_writing_get_checked_state( $_POST['just_writing_help'] ) );
	update_user_meta( $user_id, 'just_writing_d_fade', just_writing_get_checked_state( $_POST['just_writing_d_fade'] ) );
	update_user_meta( $user_id, 'just_writing_h_wc', just_writing_get_checked_state( $_POST['just_writing_h_wc'] ) );
	update_user_meta( $user_id, 'just_writing_h_p', just_writing_get_checked_state( $_POST['just_writing_h_p'] ) );
	update_user_meta( $user_id, 'just_writing_h_mb', just_writing_get_checked_state( $_POST['just_writing_h_mb'] ) );
	update_user_meta( $user_id, 'just_writing_al_new', just_writing_get_checked_state( $_POST['just_writing_al_new'] ) );
	update_user_meta( $user_id, 'just_writing_al_edit', just_writing_get_checked_state( $_POST['just_writing_al_edit'] ) );
	update_user_meta( $user_id, 'just_writing_f_lb', just_writing_get_checked_state( $_POST['just_writing_f_lb'] ) );
	update_user_meta( $user_id, 'just_writing_superscript', just_writing_get_checked_state( $_POST['just_writing_superscript'] ) );
	update_user_meta( $user_id, 'just_writing_subscript', just_writing_get_checked_state( $_POST['just_writing_subscript'] ) );
	update_user_meta( $user_id, 'just_writing_cut', just_writing_get_checked_state( $_POST['just_writing_cut'] ) );
	update_user_meta( $user_id, 'just_writing_copy', just_writing_get_checked_state( $_POST['just_writing_copy'] ) );
	update_user_meta( $user_id, 'just_writing_paste', just_writing_get_checked_state( $_POST['just_writing_paste'] ) );
	update_user_meta( $user_id, 'just_writing_pastetext', just_writing_get_checked_state( $_POST['just_writing_pastetext'] ) );
	update_user_meta( $user_id, 'just_writing_pasteword', just_writing_get_checked_state( $_POST['just_writing_pasteword'] ) );
	update_user_meta( $user_id, 'just_writing_separatorone', just_writing_get_checked_state( $_POST['just_writing_separatorone'] ) );
	update_user_meta( $user_id, 'just_writing_separatortwo', just_writing_get_checked_state( $_POST['just_writing_separatortwo'] ) );
	update_user_meta( $user_id, 'just_writing_separatorthree', just_writing_get_checked_state( $_POST['just_writing_separatorthree'] ) );
	update_user_meta( $user_id, 'just_writing_separatorfour', just_writing_get_checked_state( $_POST['just_writing_separatorfour'] ) );
	update_user_meta( $user_id, 'just_writing_separatorfive', just_writing_get_checked_state( $_POST['just_writing_separatorfive'] ) );
	update_user_meta( $user_id, 'just_writing_separatorsix', just_writing_get_checked_state( $_POST['just_writing_separatorsix'] ) );
	update_user_meta( $user_id, 'just_writing_separatorseven', just_writing_get_checked_state( $_POST['just_writing_separatorseven'] ) );
	update_user_meta( $user_id, 'just_writing_separatoreight', just_writing_get_checked_state( $_POST['just_writing_separatoreight'] ) );

	//Deal with the border options
	if( $_POST['just_writing_border_setting'] == 'hide' )
		{
		update_user_meta( $user_id, 'just_writing_h_b', 'on' );
		update_user_meta( $user_id, 'just_writing_l_b', 'off' );
		}
	elseif( $_POST['just_writing_border_setting'] == 'light' )
		{
		update_user_meta( $user_id, 'just_writing_h_b', 'off' );
		update_user_meta( $user_id, 'just_writing_l_b', 'on' );
		}
	else
		{
		update_user_meta( $user_id, 'just_writing_h_b', 'off' );
		update_user_meta( $user_id, 'just_writing_l_b', 'off' );
		}

	}

	/*
	 *	This function is called to draw the user settings page for Just Writing.
	 */
	function just_writing_user_profile_fields( $user ) 
		{ 
		// Check to see if this is the first time we've run for this user and no config
		// has been written yet, so let's do that now.
		if( get_the_author_meta( 'just_writing_enabled', $user->ID ) == "" )
			{
			include_once( "just-writing-user-setup.php" );
			Just_Writing_User_Setup( $user->ID );
			}
		
		wp_register_script( 'justwritingoptions_js', plugins_url( '', __FILE__ )  . '/just-writing-options.js' );
		wp_enqueue_script( 'justwritingoptions_js' );

		?>
	<h3>Just Writing</h3>
	 
	<table class="form-table">
		<tr>
			<th></th>
			<td>
			<span class="description"><?php echo __("Just Writing allows you to customize the Distraction Free Writing Mode in WordPress in several different ways to enable you to write the way you want to.  To find out more, please visit the ") . "<a href='http://wordpress.org/plugins/just-writing/' target=_blank>WordPress Plugin Directory page</a> " . __("or plugin home page on") . " <a href='http://toolstack.com/just-writing' target=_blank>ToolStack.com</a>.<br><br>" . __("And don't forget to ") . "<a href='http://wordpress.org/plugins/just-writing/' target=_blank>" . __("rate") . "</a>" . __(" and ") . "<a href='http://wordpress.org/support/view/plugin-reviews/just-writing' target=_blank>" . __("review") . "</a>" . __(" it too!");?></span>
			</td>
		</tr>
		<tr>
			<th><label for="just_writing_enabled"><?php echo __("Enable");?></label></th>
			<td>
			<input type="checkbox" id="just_writing_enabled" name="just_writing_enabled" <?php if( get_the_author_meta( 'just_writing_enabled', $user->ID ) == "on" ) { echo "CHECKED"; } ?> onClick="if(!just_writing_enabled.checked){ just_writing_options_table.style.display='none'}else{just_writing_options_table.style.display=''}">
			<?php echo __("Check to enable Just Writing (don't forget to make sure the visual editor is enabled at the top of this page)");?>
			</td>
		</tr>
	</table>
	<table class="form-table" id='just_writing_options_table' <?php if( get_the_author_meta( 'just_writing_enabled', $user->ID ) != "on" ) { echo "style='display:none;'"; } ?>>	
		<tr>
			<th><label for="just_writing_options"><?php echo __("Options");?></label></th>
			<td colspan=3>
			<?php echo __("Border on the title/body areas options:");?><br>
			<input type="radio" id="just_writing_s_b" name="just_writing_border_setting" value="show" <?php if( get_the_author_meta( 'just_writing_l_b', $user->ID ) != "on" && get_the_author_meta( 'just_writing_h_b', $user->ID ) != "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Show");?><br>
			<input type="radio" id="just_writing_l_b" name="just_writing_border_setting" value="light" <?php if( get_the_author_meta( 'just_writing_l_b', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Lighten");?><br>
			<input type="radio" id="just_writing_h_b" name="just_writing_border_setting" value="hide" <?php if( get_the_author_meta( 'just_writing_h_b', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Hide");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_h_p" name="just_writing_h_p" <?php if( get_the_author_meta( 'just_writing_h_p', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Hide the preview button");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_h_wc" name="just_writing_h_wc" <?php if( get_the_author_meta( 'just_writing_h_wc', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Hide the word count");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_h_mb" name="just_writing_h_mb" <?php if( get_the_author_meta( 'just_writing_h_mb', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Hide the editor mode selector");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_d_fade" name="just_writing_d_fade" <?php if( get_the_author_meta( 'just_writing_d_fade', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Disable the fade out of the toolbar *May have performance impacts*");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_al_new" name="just_writing_al_new" <?php if( get_the_author_meta( 'just_writing_al_new', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Go directly to Distraction Free Writing Mode for new posts *May have performance impacts*");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_al_edit" name="just_writing_al_edit" <?php if( get_the_author_meta( 'just_writing_al_edit', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Go directly to Distraction Free Writing Mode when editing a post *May have performance impacts*");?>
			</td>
		</tr>
		<tr>
			<th><label for="just_writing_buttons"><?php echo __("Buttons");?></label></th>
			<td colspan=3>
			<b><?php echo __("Cut/Copy/Paste *Will not work in all browsers*");?></b>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatorone" name="just_writing_separatorone" <?php if( get_the_author_meta( 'just_writing_separatorone', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
			<input type="checkbox" id="just_writing_cut" name="just_writing_cut" <?php if( get_the_author_meta( 'just_writing_cut', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Cut");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_copy" name="just_writing_copy" <?php if( get_the_author_meta( 'just_writing_copy', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Copy");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_paste" name="just_writing_paste" <?php if( get_the_author_meta( 'just_writing_paste', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Paste");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
			<input type="checkbox" id="just_writing_pastetext" name="just_writing_pastetext" <?php if( get_the_author_meta( 'just_writing_pastetext', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Paste as Text");?>
			</td>
			<td colspan=2>
			<input type="checkbox" id="just_writing_pasteword" name="just_writing_pasteword" <?php if( get_the_author_meta( 'just_writing_pasteword', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Paste from Word");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<b><?php echo __("Text Decorations");?></b>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatortwo" name="just_writing_separatortwo" <?php if( get_the_author_meta( 'just_writing_separatortwo', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
			<input type="checkbox" id="just_writing_bold" name="just_writing_bold" <?php if( get_the_author_meta( 'just_writing_bold', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Bold");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_italics" name="just_writing_italics" <?php if( get_the_author_meta( 'just_writing_italics', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Italics");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_strike" name="just_writing_strike" <?php if( get_the_author_meta( 'just_writing_strike', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Strikethrough");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_under" name="just_writing_under" <?php if( get_the_author_meta( 'just_writing_under', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Underline");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_superscript" name="just_writing_superscript" <?php if( get_the_author_meta( 'just_writing_superscript', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Superscript");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_subscript" name="just_writing_subscript" <?php if( get_the_author_meta( 'just_writing_subscript', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Subscript");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_remove" name="just_writing_remove" <?php if( get_the_author_meta( 'just_writing_remove', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Remove Formating");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<b><?php echo __("Lists, Media and Links");?></b>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatorthree" name="just_writing_separatorthree" <?php if( get_the_author_meta( 'just_writing_separatorthree', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_ul" name="just_writing_ul" <?php if( get_the_author_meta( 'just_writing_ul', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Unordered List");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_nl" name="just_writing_nl" <?php if( get_the_author_meta( 'just_writing_nl', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Ordered List");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_media" name="just_writing_media" <?php if( get_the_author_meta( 'just_writing_media', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add Media");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_link" name="just_writing_link" <?php if( get_the_author_meta( 'just_writing_link', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Link");?>
			</td>
			<td colspan=2>
			<input type="checkbox" id="just_writing_unlink" name="just_writing_unlink" <?php if( get_the_author_meta( 'just_writing_unlink', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Unlink");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<b><?php echo __("Alignment");?></b>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatorfour" name="just_writing_separatorfour" <?php if( get_the_author_meta( 'just_writing_separatorfour', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_left" name="just_writing_left" <?php if( get_the_author_meta( 'just_writing_left', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Align Left");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_center" name="just_writing_center" <?php if( get_the_author_meta( 'just_writing_center', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Align Center");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_right" name="just_writing_right" <?php if( get_the_author_meta( 'just_writing_right', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Align Right");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_outdent" name="just_writing_outdent" <?php if( get_the_author_meta( 'just_writing_outdent', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Outdent");?>
			</td>
			<td colspan=2>
			<input type="checkbox" id="just_writing_indent" name="just_writing_indent" <?php if( get_the_author_meta( 'just_writing_indent', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Indent");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<b><?php echo __("Paragraph Formats");?></b>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatorfive" name="just_writing_separatorfive" <?php if( get_the_author_meta( 'just_writing_separatorfive', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_f_lb" name="just_writing_f_lb" <?php if( get_the_author_meta( 'just_writing_f_lb', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Enable formats dropdown instead of buttons (this will show all formats and hide all associated buttons, ignoring the options below).");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_p" name="just_writing_p" <?php if( get_the_author_meta( 'just_writing_p', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Paragraph");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_h1" name="just_writing_h1" <?php if( get_the_author_meta( 'just_writing_h1', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("h1");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_h2" name="just_writing_h2" <?php if( get_the_author_meta( 'just_writing_h2', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("h2");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_h3" name="just_writing_h3" <?php if( get_the_author_meta( 'just_writing_h3', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("h3");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_h4" name="just_writing_h4" <?php if( get_the_author_meta( 'just_writing_h4', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("h4");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_h5" name="just_writing_h5" <?php if( get_the_author_meta( 'just_writing_h5', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("h5");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_h6" name="just_writing_h6" <?php if( get_the_author_meta( 'just_writing_h6', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("h6");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_quotes" name="just_writing_quotes" <?php if( get_the_author_meta( 'just_writing_quotes', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Block Quotes");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_address" name="just_writing_address" <?php if( get_the_author_meta( 'just_writing_address', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Address");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_pf" name="just_writing_pf" <?php if( get_the_author_meta( 'just_writing_pf', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Preformatted");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<b><?php echo __("Actions");?></b>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatorsix" name="just_writing_separatorsix" <?php if( get_the_author_meta( 'just_writing_separatorsix', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_spell" name="just_writing_spell" <?php if( get_the_author_meta( 'just_writing_spell', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Spellcheck");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_more" name="just_writing_more" <?php if( get_the_author_meta( 'just_writing_more', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Insert More Tag");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_char" name="just_writing_char" <?php if( get_the_author_meta( 'just_writing_char', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Insert custom character");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatorseven" name="just_writing_separatorseven" <?php if( get_the_author_meta( 'just_writing_separatorseven', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator before this group");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<input type="checkbox" id="just_writing_undo" name="just_writing_undo" <?php if( get_the_author_meta( 'just_writing_undo', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Undo");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_redo" name="just_writing_redo" <?php if( get_the_author_meta( 'just_writing_redo', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Redo");?>
			</td>
			<td>
			<input type="checkbox" id="just_writing_help" name="just_writing_help" <?php if( get_the_author_meta( 'just_writing_help', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Help");?>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan=3>
			<input type="checkbox" id="just_writing_separatoreight" name="just_writing_separatoreight" <?php if( get_the_author_meta( 'just_writing_separatoreight', $user->ID ) == "on" ) { echo "CHECKED"; } ?>>
			<?php echo __("Add a separator after this group");?>
			</td>
		</tr>
		<tr>
			<td></th>
			<td>
			<a onClick='JustWritingSelectAll()'><?php echo __("Select All");?></a>
			</td>
			<td>
			<a onClick='JustWritingDeSelectAll()'><?php echo __("Deselect All");?></a>
			</td>
			<td>
			<a onClick='JustWritingSelectDefaults()'><?php echo __("Select Defaults");?></a>
			</td>
		</tr>
	</table>
<?php 
	}
?>