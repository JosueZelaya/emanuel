<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>FooTable - jQuery plugin for responsive HTML tables</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap/FooTable-2/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    <link href="css/footable-demos.css" rel="stylesheet" type="text/css"/>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>-->
    <script src="js/jquery-ui/jquery-1.10.2.js"></script>
    <script>
//        if (!window.jQuery) { document.write('<script src="js/jquery-1.9.1.min.js"><\/script>'); }
    </script>
    <script src="bootstrap/FooTable-2/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/demos.js" type="text/javascript"></script>
</head>
<body>
<!--	<div class="demo-container">
        <ul class="breadcrumb">
            <li><a href="http://fooplugins.com/plugins/footable-jquery/">FooTable</a> <span class="divider">&raquo;</span></li>
            <li><a href="index.htm">Demos</a> <span class="divider">&raquo;</span></li>
            <li class="active">Getting Started</li>
        </ul>
        <div class="alert">
            A simple demo to get you up and running with FooTable in 5 minutes.
        </div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#demo">Demo</a></li>
			<li><a href="#setup">Setup</a></li>
			<li><a href="#docs">Docs</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="demo">-->
				<table class="table demo table-bordered" data-filter="#filter" data-page-size="5" data-page-previous-text="prev" data-page-next-text="next">
					<thead>
						<tr>
							<th data-toggle="true">
								First Name
							</th>
							<th>
								Last Name
							</th>
							<th data-hide="phone,tablet">
								Job Title
							</th>
							<th data-hide="phone,tablet">
								DOB
							</th>
							<th data-hide="phone">
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Isidra</td>
							<td><a href="#">Boudreaux</a></td>
							<td>Traffic Court Referee</td>
							<td data-value="78025368997">22 Jun 1972</td>
							<td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
						</tr>
						<tr>
							<td>Shona</td>
							<td>Woldt</td>
							<td><a href="#">Airline Transport Pilot</a></td>
							<td data-value="370961043292">3 Oct 1981</td>
							<td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
						</tr>
						<tr>
							<td>Granville</td>
							<td>Leonardo</td>
							<td>Business Services Sales Representative</td>
							<td data-value="-22133780420">19 Apr 1969</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
						<tr>
							<td>Easer</td>
							<td>Dragoo</td>
							<td>Drywall Stripper</td>
							<td data-value="250833505574">13 Dec 1977</td>
							<td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
						</tr>
						<tr>
							<td>Maple</td>
							<td>Halladay</td>
							<td>Aviation Tactical Readiness Officer</td>
							<td data-value="694116650726">30 Dec 1991</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
						<tr>
							<td>Maxine</td>
							<td><a href="#">Woldt</a></td>
							<td><a href="#">Business Services Sales Representative</a></td>
							<td data-value="561440464855">17 Oct 1987</td>
							<td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
						</tr>
						<tr>
							<td>Lorraine</td>
							<td>Mcgaughy</td>
							<td>Hemodialysis Technician</td>
							<td data-value="437400551390">11 Nov 1983</td>
							<td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
						</tr>
						<tr>
							<td>Lizzee</td>
							<td><a href="#">Goodlow</a></td>
							<td>Technical Services Librarian</td>
							<td data-value="-257733999319">1 Nov 1961</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
						<tr>
							<td>Judi</td>
							<td>Badgett</td>
							<td>Electrical Lineworker</td>
							<td data-value="362134712000">23 Jun 1981</td>
							<td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
						</tr>
						<tr>
							<td>Lauri</td>
							<td>Hyland</td>
							<td>Blackjack Supervisor</td>
							<td data-value="500874333932">15 Nov 1985</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
					</tbody>
				</table>
<!--			</div>
			<div class="tab-pane" id="setup">
				<ol class="foo-setup">
					<li>
                        <h4>Include FooTable Core CSS</h4>
						<pre>&lt;link href=&quot;path_to_your_css/footable.core.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;</pre>
					</li>
                    <li>
                        <h4>[optional] Include FooTable Theme CSS</h4>
                        <div class="alert alert-success">
                            FooTable is now built to work with <a target="_blank" href="http://twitter.github.io/bootstrap/">Twitter Bootstrap</a> out of the box - WOOT!
                        </div>
                        <p>But you can also use one of our built-in themes if you want:</p>
                        <pre>&lt;link href=&quot;path_to_your_css/themes/footable.standalone.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;</pre>
                        <p>Check out the demos for our <a href="metro-theme.htm">Metro</a> and <a href="old-theme.htm">Original FooTable</a> themes.</p>
                    </li>
					<li>
                        <h4>Include jQuery</h4>
						<pre>&lt;script src=&quot;http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;</pre>
					</li>
					<li>
                        <h4>Include FooTable jQuery Plugin</h4>
						<pre>&lt;script src=&quot;path_to_your_js/footable.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;</pre>
					</li>
					<li>
                        <h4>Initialize FooTable!</h4>
						<pre>&lt;script type=&quot;text/javascript&quot;&gt;
	$(function () {
		$(&#39;.footable&#39;).footable();
	});
&lt;/script&gt;</pre>
					</li>
				</ol>
			</div>
			<div class="tab-pane" id="docs">
				<h4>Breakpoints</h4>
				<p>FooTable works off the concept of breakpoints. These can be customized, but the default breakpoints are</p>
                <pre>breakpoints: {
	phone: 480,
	tablet: 1024
}</pre>
				<p>To change the breakpoints simply pass in a breakpoints option when initializing FooTable:</p>
                <pre>
$(&#39;.footable&#39;).footable({
    breakpoints: {
        tiny: 100,
        medium: 555,
        big: 2048
    }
});</pre>
				<h4>Column Setup (using data attributes)</h4>
				<p>You then need to tell FooTable which columns to hide on which breakpoints, by specifying <code>data-hide</code> attributes on the table head columns:</p>
				<pre>&lt;table class=&quot;footable table&quot;&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Name&lt;/th&gt;
			&lt;th data-hide=&quot;phone&quot;&gt;Job Title&lt;/th&gt;
			&lt;th data-hide=&quot;phone,tablet&quot;&gt;Status&lt;/th&gt;
			&lt;th data-hide=&quot;all&quot;&gt;Description&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;</pre>
				<p>In the above example the following will be true:</p>
				<table class="footable table" data-sort="false">
					<thead>
						<tr>
							<th>Column</th>
							<th>Data Attribute</th>
							<th data-hide="phone,tablet">Shown on Desktop</th>
							<th data-hide="phone,tablet">Shown on Tablet</th>
							<th data-hide="phone,tablet">Shown on Phone</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Name</td>
							<td>[none]</td>
							<td><span class="label label-success" title="Active">yes</span></td>
							<td><span class="label label-success" title="Active">yes</span></td>
							<td><span class="label label-success" title="Active">yes</span></td>
						</tr>
						<tr>
							<td>Job Title</td>
							<td><code>data-hide="phone"</code></td>
							<td><span class="label label-success" title="Active">yes</span></td>
							<td><span class="label label-success" title="Active">yes</span></td>
							<td><span class="label label-important" title="Active">no</span></td>
						</tr>
						<tr>
							<td>Status</td>
							<td><code>data-hide="phone,tablet"</code></td>
							<td><span class="label label-success" title="Active">yes</span></td>
							<td><span class="label label-important" title="Active">no</span></td>
							<td><span class="label label-important" title="Active">no</span></td>
						</tr>
                        <tr>
                            <td>Description</td>
                            <td><code>data-hide="all"</code></td>
                            <td><span class="label label-important" title="Active">no</span></td>
                            <td><span class="label label-important" title="Active">no</span></td>
                            <td><span class="label label-important" title="Active">no</span></td>
                        </tr>
					</tbody>
				</table>
                <p>You can set a column to always be hidden, by adding <code>data-hide="all"</code> to the table head column. (Check out the <a href="icon-styles.htm">icon styles</a> demo to see this in action)</p>
			</div>
		</div>
	</div>-->
    <script type="text/javascript">
        $(function () {
			$('table').footable();
        });
    </script>
</body>
</html>
