<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title2'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title2'); ?>" name="<?php echo $this->get_field_name('title2'); ?>" type="text" value="<?php echo $title2; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('week'); ?>">Monday-Friday:</label>
   <input class="widefat" id="<?php echo $this->get_field_id('week'); ?>" name="<?php echo $this->get_field_name('week'); ?>" type="text" value="<?php echo $week; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('saturday'); ?>">Saturday:</label>
   <input class="widefat" id="<?php echo $this->get_field_id('saturday'); ?>" name="<?php echo $this->get_field_name('saturday'); ?>" type="text" value="<?php echo $saturday; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('sunday'); ?>">Sunday:</label>
   <input class="widefat" id="<?php echo $this->get_field_id('sunday'); ?>" name="<?php echo $this->get_field_name('sunday'); ?>" type="text" value="<?php echo $sunday; ?>">
   </p>
</div>
