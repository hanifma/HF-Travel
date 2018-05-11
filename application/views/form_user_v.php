	<body>
		<form action="http://localhost/codeigniter/index.php/user/add" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="Password" name="password"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td>:</td>
					<td><input type="text" name="fullname"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td>:</td>
					<td>
						<select name="level">
							<option value="admin">Admin</option>
							<option value="user">User</option>	
						</select>
					</td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td><input type="submit" value="Submit" name="submit"></td>
				</tr>

			</table>
		</form>
	</body>
