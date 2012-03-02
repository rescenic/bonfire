<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/roles') ?>"><?php echo lang('role_roles'); ?></a>
	</li>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/roles/create') ?>"><?php echo lang('role_new_role'); ?></a>
	</li>
	<li <?php echo $this->uri->segment(4) == 'permission_matrix' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/roles/permission_matrix') ?>"><?php echo lang('matrix_header'); ?></a>
	</li>
</ul>

