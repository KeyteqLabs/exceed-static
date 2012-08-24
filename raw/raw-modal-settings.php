<section class="eze-smallmodal eze-settings-modal">
<span class="arrow"><i class="icon-caret-left"></i></span>
	<h1>Settings</h1>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">Your profile</a></li>
		<li><a href="#tab2" data-toggle="tab">Notifications</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">

			<form class="row-fluid">
				<div class="span5">
				<label>First name</label>
					<input type="text" placeholder="Type something…">
				</div>
				<div class="span7">
				<label>Last name</label>
					<input type="text" placeholder="Type something…">
				</div>
				<label>Signature</label>
					<input type="text" placeholder="Type something…">
			</form>

		<div class="well well-small">
			<form class="row-fluid">
				<legend>Update login information</legend>
				<div class="span5">
					<label>Username</label>
						<input type="text" placeholder="Type something…">
					<label>Password</label>
						<input type="text" placeholder="Type something…">
					<button type="submit" class="btn">Update login information</button>
				</div>
				<div class="span5">
				<label>Email address</label>
					<input type="text" placeholder="Type something…">
				<label>Repeat password</label>
					<input type="text" placeholder="Type something…">
				</div>
			</form>
		</div>

		</div>
		<div class="tab-pane" id="tab2">
			<form>
				<h2>Notifications</h2>
					<label class="checkbox">
						<input type="checkbox" value="">
						Recieve all notifications in one email
					</label>
				<h2>Wrap-up email</h2>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Daily, at <select><option>12:00</option></select>
				</label>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Weekly, on <select><option>Monday</option></select>
				</label>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
					Monthly, on day <select><option>1</option></select>
				</label>
			</form>	



		</div>
	</div>
</section>