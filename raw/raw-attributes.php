<section class="eze-object-attributes">


	<section class="eze-object-translations">
		<h1>Show translations</h1>
		<ul>
			<li class="disabled">
				<label><input id="kp-edit-language-eng-GB" type="checkbox" checked="checked" data-language="eng-GB" data-version="118" disabled="disabled">English (United Kingdom)</label>
			</li>
			<li>
				<label><input id="kp-edit-language-nor-NO" type="checkbox" data-language="nor-NO" data-version="119">Norsk (Bokmål)</label>
			</li>
		</ul>
	</section>


	<div class="eze-object-attribute-wrap">

		<section class="eze-object-attribute eze-string">
			<!-- <div class="alert fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.</div>-->
			<div class="language"><img class="flag" src="http://ezexceed.no/extension/ezexceed/design/ezexceed/images/flags/eng-US.gif"> English (American)</div>
			<span class="label label-required">Required</span>
			<label class="heading">String of text</label>
				<span class="help-block description">Example block-level help text here.</span>
				<input type="text" class="span3" placeholder="Type something…">
		</section>

		<section class="eze-object-attribute eze-select last">
			<div class="language"><img class="flag" src="http://ezexceed.no/extension/ezexceed/design/ezexceed/images/flags/eng-US.gif"> English (American)</div>
			<label class="heading">Select something</label>
				<span class="help-block description">Example block-level help text here.</span>
				<select class="chzn-select"><option>Select me</option><option>2</option></select>
		</section>
		
	</div>

	<div class="eze-object-attribute-wrap">

		<section class="eze-object-attribute eze-checkbox">
			<label class="heading">Hypermedia</label>
				<span class="help-block description">Example block-level help text here.</span>
				<label class="checkbox">
    				<input type="checkbox"> Enable hypermedia thing
  				</label>
		</section>

		<section class="eze-object-attribute eze-date last">
			<label class="heading">Pick a date</label>
				<span class="help-block description">Example block-level help text here.</span>
				<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
					<input class="span2" size="16" type="text" value="12-02-2012"><span class="add-on"><i class="icon-calendar"></i></span>
				</div>
		</section>

	</div>

	<div class="eze-object-attribute-wrap">

		<section class="eze-object-attribute eze-image">
			<span class="label label-required">Required</span>
			<label class="heading">Regular Image</label>
				<span class="help-block description">Example block-level help text here.</span>
				<div href="#" class="thumbnail"><img src="http://placehold.it/300x100" alt=""><button class="btn btn-inverse">Edit image</button></div>
				<p><button href="#" class="btn">Upload new image</button></p>
		</section>

		<section class="eze-object-attribute eze-dam last">
			<label class="heading">DAM Asset</label>
				<span class="help-block description">Example block-level help text here.</span>
				<div href="#" class="thumbnail"><img src="http://placehold.it/300x100" alt=""><button class="btn btn-inverse">Scale versions</button></div>
				<p><button href="#" class="btn">Browse media library</button></p>
		</section>
		
	</div>


	<div data-toggle="collapse" class="attr-group" data-target="#group"><i class="icon-caret-right"></i>View attribute group</div>
	<div id="group" class="collapse">

	<section class="eze-object-attribute full-width">
		<label class="heading">Related content</label>
			<span class="help-block description">Example block-level help text here.</span>
			<ul class="eze-items">
				<li><div class="wrap"><p><i class="icon-reorder"></i><i class="icon-magic"></i><small>Class</small> Object name</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
				<li><div class="wrap"><p><i class="icon-reorder"></i><i class="icon-magic"></i><small>Class</small> Object name</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
				<li><div class="wrap"><p><i class="icon-reorder"></i><i class="icon-magic"></i><small>Class</small> Object name</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
				<li><div class="wrap"><p><i class="icon-reorder"></i><i class="icon-magic"></i><small>Class</small> Object name</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
			</ul>
			<p><button href="#" class="btn">Add relations to other content…</button></p>
	</section>
	
	<section class="eze-object-attribute full-width">
		<label class="heading">Authors</label>
			<span class="help-block description">Example block-level help text here.</span>
			<ul class="eze-items">
				<li><div class="wrap"><p><i class="icon-user"></i>Tor Løvskogen Bollingmo – typografi@gmail.com</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
				<li><div class="wrap"><p><i class="icon-user"></i>Tor Løvskogen Bollingmo – typografi@gmail.com</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
				<li><div class="wrap"><p><i class="icon-user"></i>Tor Løvskogen Bollingmo – typografi@gmail.com</p><button class="btn btn-mini edit-btn" href="">Edit</button><button class="btn btn-mini remove-btn" href="">x</button></div></li>
			</ul>
			<p><button href="#" class="btn">Add new user</button></p>
	</section>
		
	</div>



	<section class="eze-object-attribute eze-matrix full-width">
		<label class="heading">Matrix</label>
			<span class="help-block description">Enter text into the matrix.</span>
			<table class="table table-bordered table-striped table-condensed">
				<thead>
					<tr>
						<th><input type="checkbox"></th>
						<th>Column 1</th>
						<th>Column 2</th>
						<th>Column with long name</th>
						<th>Col. 4</th>
						<th>Column 5</th>
						<th>Column 6</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
					</tr>
					<tr>
						<td><input type="checkbox"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
					</tr>
					<tr>
						<td><input type="checkbox"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
						<td><input type="text" placeholder="Type something…"></td>
					</tr>
				</tbody>
			</table>
			<button class="btn">Remove selected rows</button>
			<p><select class="chzn-select"><option>5</option><option>10</option></select><button class="btn">Add rows</button></p>
			
	</section>
</section>