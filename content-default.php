<?php
/**
 * DELETE ME!!
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">H1. ObSub Boilerplate</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2>H2. Nulla eleifend tortor vitae lorem accumsan</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Morbi justo lorem</a>, congue eu ipsum eu, feugiat ornare ex. Nulla eleifend tortor vitae lorem accumsan, ac pellentesque elit pretium. Mauris ac ipsum eros. Suspendisse dolor mi, viverra sit amet diam in, convallis tempus ex. Ut cursus mi vel lacus facilisis suscipit. Curabitur facilisis turpis in augue finibus, eu congue magna condimentum.</p>

		<blockquote><p>Blockquote, massa ut fermentum maximus, nisl libero eleifend odio, ornare consectetur massa velit vel tellus.</p></blockquote>
		Mauris posuere nibh diam, at bibendum purus viverra nec. Ut tellus dui, rutrum at aliquet nec, mattis sed justo. Vestibulum ipsum dui, mollis non ipsum eget, euismod gravida lectus. Phasellus tristique pulvinar elit, ut fermentum ipsum eleifend ut. In tempus ac sem nec blandit. Quisque vel convallis lectus. In semper auctor lectus vitae ultrices.</p>

		<h3>H3. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum. Fusce sed molestie eros. Cras non justo nunc. </h3>

		<p>Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum. Fusce sed molestie eros. Cras non justo nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur et interdum sem, et convallis lacus. Fusce efficitur, massa ut fermentum maximus, nisl libero eleifend odio, ornare consectetur massa velit vel tellus. Morbi rhoncus arcu at orci blandit, non dapibus est vestibulum. Fusce in vestibulum metus. Sed gravida eu mi non pharetra. Suspendisse egestas nibh imperdiet augue iaculis posuere. Donec bibendum diam rhoncus, porta nulla nec, facilisis est. Donec in erat nec odio venenatis faucibus et ac nunc.</p>

		<h4>H4. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum. Fusce sed molestie eros. Cras non justo nunc. </h4>

		<h5>H5. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum. Fusce sed molestie eros. Cras non justo nunc. </h5>

		<h6>H6. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum. Fusce sed molestie eros. Cras non justo nunc. </h6>

		<hr/>

		<h3>Lists</h3>

		<ul>
			<li>This is a list item in an unordered list</li>
			<li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line. </li>
			<li>
				Lists can be nested inside of each other
				<ul>
					<li>This is a nested list item</li>
					<li>This is another nested list item in an unordered list</li>
				</ul>
			</li>
			<li>This is the last list item</li>
		</ul>

		<ol>
			<li>This is a list item in an ordered list</li>
			<li>An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.</li>
			<li>
				Lists can be nested inside of each other
				<ol>
					<li>This is a nested list item</li>
					<li>This is another nested list item in an ordered list</li>
				</ol>
			</li>
			<li>This is the last list item</li>
		</ol>

		<hr/>

		<h3>Preformatted & code</h3>

		<pre>
Fusce efficitur,
massa ut <code>fermentum</code> maximus,
nisl libero eleifend odio,
ornare consectetur massa velit vel tellus.</pre>

		<hr/>

		<h3>Forms</h3>

		<form action="#">
			<div class="field-container">
			  <label for="text">Text Input <abbr title="Required">*</abbr></label>
			  <input id="text" type="text" placeholder="Text Input">
			</div>
			<div class="field-container">
			  <label for="password">Password</label>
			  <input id="password" type="password" placeholder="Type your Password">
			</div>
			<div class="field-container">
			  <label for="webaddress">Web Address</label>
			  <input id="webaddress" type="url" placeholder="http://yoursite.com">
			</div>
			<div class="field-container">
			  <label for="emailaddress">Email Address</label>
			  <input id="emailaddress" type="email" placeholder="name@email.com">
			</div>
			<div class="field-container">
			  <label for="search">Search</label>
			  <input id="search" type="search" placeholder="Enter Search Term">
			</div>
			<div class="field-container">
			  <label for="number">Number Input <abbr title="Required">*</abbr></label>
			  <input id="number" type="number" placeholder="Enter a Number" pattern="[0-9]*">
			</div>
			<div class="field-container">
			  <label for="textarea">Textarea</label>
			  <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
			</div>
			<div class="field-container">
			  <label class="error">Error Input</label>
			  <input class="is-error" type="text" placeholder="Text Input">
			</div>
			<div class="field-container">
			  <label class="valid">Valid</label>
			  <input class="is-valid" type="text" placeholder="Text Input">
			</div>

			<input id="submit" type="submit" value="Submit" class="btn btn-success"/>
			<input id="reset" type="reset" value="Reset" class="btn btn-error"/>
			<input id="button" type="button" value="Button" class="btn btn-default"/>
			<input id="disabled" type="button" value="Disabled" class="btn btn-disabled" disabled/>
		</form>

		<hr/>

		<h3>Table with <code>.table</code> class</h3>
		<table class="table">
			<tr>
				<th>Table Heading 1</th>
				<th>Table Heading 2</th>
				<th>Table Heading 3</th>
				<th>Table Heading 4</th>
				<th>Table Heading 5</th>
			</tr>
			<tr>
				<td>Table Cell 1</td>
				<td>Table Cell 2</td>
				<td>Table Cell 3</td>
				<td>Table Cell 4</td>
				<td>Table Cell 5</td>
			</tr>
			<tr>
				<td>Table Cell 1</td>
				<td>Table Cell 2</td>
				<td>Table Cell 3</td>
				<td>Table Cell 4</td>
				<td>Table Cell 5</td>
			</tr>
			<tr>
				<td>Table Cell 1</td>
				<td>Table Cell 2</td>
				<td>Table Cell 3</td>
				<td>Table Cell 4</td>
				<td>Table Cell 5</td>
			</tr>
			<tr>
				<td>Table Cell 1</td>
				<td>Table Cell 2</td>
				<td>Table Cell 3</td>
				<td>Table Cell 4</td>
				<td>Table Cell 5</td>
			</tr>
			<tr>
				<th>Table Footer 1</th>
				<th>Table Footer 2</th>
				<th>Table Footer 3</th>
				<th>Table Footer 4</th>
				<th>Table Footer 5</th>
			</tr>
		</table>

	</div><!-- .entry-content -->

	<hr/>

	<h3>Footer</h3>

	<footer class="entry-footer">
		<p>[entry footer]</p>
	</footer><!-- .entry-footer -->

	<hr/>
</article><!-- #post-## -->
