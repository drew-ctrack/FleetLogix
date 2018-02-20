<div class="sidebar hide-for-print">
<div class="sidebar-menu">
	<% if Menu(2) %>
		<ul>
			<% loop Menu(2) %>
				<li <% if LinkOrCurrent = current %>class="active"<% end_if %>>
					<a href="$Link">$Title</a>
				</li>
			<% end_loop %>
		</ul>
	<% else %>
		<ul>
			<% loop Menu(1) %>
				<li <% if LinkOrCurrent = current %>class="active"<% end_if %>>
					<a href="$Link">$Title</a>
				</li>
			<% end_loop %>
		</ul>
	<% end_if %>
</div>
