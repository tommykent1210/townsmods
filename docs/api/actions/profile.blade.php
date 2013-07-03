<legend>Profile Actions</legend>
<p>The following actions relate to getting user information. 
	This information is ALL non-sensitive, and is all publically visible through the a normal 
	TownsMods.net user profile.</p>


<legend>Contents</legend>
<ul>
	<li><a href="#get">Get Profile</a></li>
	<li><a href="#get_id">Get User ID</a></li>
</ul>


<legend>Actions</legend>
<a id="get"></a><h4>Get Profile<small>- Action name: "profile_get"</small></h4>
Gets public profile information.

<strong>Request:</strong>
<table class="table table-bordered table-striped">
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Example</th>
	</tr>

	<tr>
		<td><em>userid</em></td>
		<td>The ID of the user.</td>
		<td>12345</td>
	</tr>
</table>


<br />

<strong>Response:</strong>
<table class="table table-bordered table-striped">
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Example</th>
	</tr>

	<tr>
		<td><em>username</em></td>
		<td>The username of the user</td>
		<td>testuser</td>
	</tr>
	<tr>
		<td><em>registration_date</em></td>
		<td>UNIX timestamp of registration date</td>
		<td>1367496410</td>
	</tr>
	<tr>
		<td><em>rank</em></td>
		<td>The user's chosen rank/user title.</td>
		<td>Apprentice Mapper</td>
	</tr>
	<tr>
		<td><em>xp</em></td>
		<td>The amount of XP the user has</td>
		<td>47</td>
	</tr>
</table>

<legend></legend><a id="get_id"></a><h4>Get User ID<small>- Action name: "profile_get_id"</small></h4>
If you do not know the user's ID, use this to get it from a username.

<strong>Request:</strong>
<table class="table table-bordered table-striped">
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Example</th>
	</tr>

	<tr>
		<td><em>username</em></td>
		<td>The username of the user.</td>
		<td>testuser</td>
	</tr>
</table>


<br />

<strong>Response:</strong>
<table class="table table-bordered table-striped">
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Example</th>
	</tr>

	<tr>
		<td><em>id</em></td>
		<td>The id of the user</td>
		<td>12345</td>
	</tr>
</table>