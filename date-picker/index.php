
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Datepicker for Bootstrap</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
	<style>
	#alert {
		display: none;
	}
    body {
        padding-top: 50px;
    }
	</style>
    <link href="google-code-prettify/prettify.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="google-code-prettify/prettify.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>    
    
  </head>

  <body>
  
   <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="#">Datepicker for Bootstrap</a>
                <ul class="nav">
                    <li class="active"><a href="#">Docs and examples</a></li>
                    <li><a href="https://github.com/vitalets/bootstrap-datepicker" taget="_blank">Watch on GitHub</a></li>
                </ul>
            </div>
        </div>
   </div>  
  
  <div class="container">
    <section id="typeahead">
      <div class="page-header">
        <h1>Datepicker for Bootstrap <small>bootstrap-datepicker.js</small></h1>
      </div>

      <div class="row">
        <div class="span3 columns">
          <h3>About</h3>
          <p>Add datepicker picker to field or to any other element.</p>
		  <ul>
			<li>can be used as a component</li>
			<li>formats: dd, d, mm, m, yyyy, yy</li>
			<li>separators: -, /, .</li>
		  </ul>
          <p><a href="https://github.com/vitalets/bootstrap-datepicker/zipball/master" class="btn">Download</a></p>
        </div>
        <div class="span9 columns">
          <h2>Example</h2>
          <p>Attached to a field with the format specified via options.</p>
          <div class="well">
            <input type="text" class="span2" value="02-16-2012" id="dp1" >
          </div>
          <p>Attached to a field with the format specified via data tag.</p>
          <div class="well">
            <!--<button id="btn2" style="float: right">manual set to 03/17/12</button>-->
            <input type="text" class="span2" value="02/16/12" data-date-format="mm/dd/yy" id="dp2" >
          </div>
          <p>As component.</p>
          <div class="well">
			  <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
				<input class="span2" size="16" type="text" value="12-02-2012" readonly>
				<span class="add-on"><i class="icon-th"></i></span>
			  </div>
          </div>
          <p>Attached to other elment then field and using events to work with the date values.</p>
          <div class="well">
            
            
			<div class="alert alert-error" id="alert">
				<strong>Oh snap!</strong>
			  </div>
			<table class="table">
				<thead>
					<tr>
						<th>Start date<a href="#" class="btn small" id="dp4" data-date-format="yyyy-mm-dd" data-date="2012-02-20">Change</a></th>
						<th>End date<a href="#" class="btn small" id="dp5" data-date-format="yyyy-mm-dd" data-date="2012-02-25">Change</a></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="startDate">2012-02-20</td>
						<td id="endDate">2012-02-25</td>
					</tr>
				</tbody>
			</table>
          </div>
          
          <p>Attached to <i>div</i> (inline)</p>
          <div class="well">
              <button id="btn6" style="float: right">manual set to 15-05-1984</button>
              <button id="btn7" style="float: right; margin-right: 10px">clear</button>
              <div id="dp6" data-date="12-02-2012" data-date-format="dd-mm-yyyy"></div>
          </div>
          
          <hr>
          <h2>Using bootstrap-datepicker.js</h2>
          <p>Call the datepicker via javascript:</p>
          <pre class="prettyprint linenums">$('.datepicker').datepicker()</pre>
          <h2>Options</h2>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 50px;">type</th>
               <th style="width: 100px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
              <tr>
               <td>format</td>
               <td>string</td>
               <td>'mm/dd/yyyy'</td>
               <td>the date format, combination of  d, dd, m, mm, yy, yyy.</td>
             </tr>
              <tr>
               <td>weekStart</td>
               <td>integer</td>
               <td>0</td>
               <td>day of the week start. 0 for Sunday -  6 for Saturday</td>
             </tr>
              <tr>
               <td>startDate</td>
               <td>date</td>
               <td>null</td>
               <td>The earliest date that may be selected; all earlier dates will be disabled</td>
             </tr>
              <tr>
               <td>endDate</td>
               <td>date</td>
               <td>null</td>
               <td>The latest date that may be selected; all later dates will be disabled</td>
             </tr>    
              <tr>
               <td>autoclose</td>
               <td>boolean</td>
               <td>false</td>
               <td>Whether or not to close the datepicker immediately when a date is selected</td>
             </tr>      
              <tr>
               <td>startView</td>
               <td>string</td>
               <td>0, 'month'</td>
               <td>The view that the datepicker should show when it is opened. Accepts values of 0 or 'month' for month view (the default), 1 or 'year' for the 12-month overview, and 2 or 'decade' for the 10-year overview. Useful for date-of-birth datepickers</td>
             </tr>  
              <tr>
               <td>keyboardNavigation</td>
               <td>boolean</td>
               <td>true</td>
               <td>Whether or not to allow date navigation by arrow keys</td>
             </tr>  
              <tr>
               <td>language</td>
               <td>string</td>
               <td>en</td>
               <td>The two-letter code of the language to use for month and day names. These will also be used as the input's value (and subsequently sent to the server in the case of form submissions). Currently ships with English ('en'), German ('de'), Brazilian ('br'), and Spanish ('es') translations, but others can be added (see I18N below). If an unknown language code is given, English will be used</td>
             </tr>                                             
            </tbody>
          </table>

          <h2>Markup</h2>
          <p>Format a component.</p>
<pre class="prettyprint linenums">
&lt;div class=&quot;input-append date&quot; id=&quot;dp3&quot; data-date=&quot;12-02-2012&quot; data-date-format=&quot;dd-mm-yyyy&quot;&gt;
  &lt;input class=&quot;span2&quot; size=&quot;16&quot; type=&quot;text&quot; value=&quot;12-02-2012&quot;&gt;
  &lt;span class=&quot;add-on&quot;&gt;&lt;i class=&quot;icon-th&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>

  <p>Format inline.</p>
<pre class="prettyprint linenums">
&lt;div id=&quot;dp6&quot; data-date=&quot;12-02-2012&quot; data-date-format=&quot;dd-mm-yyyy&quot;&gt;&lt;/div&gt;
</pre>

          <h2>Methods</h2>
          <h4>.datepicker(options)</h4>
          <p>Initializes an datepicker.</p>
	
          <h4>show</h4>
          <p>Arguments: None. <br> Show the datepicker.</p>    	  
          <pre class="prettyprint">$('#datepicker').datepicker('show');</pre>
          
          <h4>hide</h4>
          <p>Arguments: None. <br> Hide the datepicker..</p>          
          <pre class="prettyprint">$('#datepicker').datepicker('hide');</pre>
          
          <h4>update</h4>
          <p>Arguments: <ul><li>date (string, optional)</li></ul><br> Update the datepicker with the current input value or given date as argument. In second case input will be updated as well.</p>          
          <pre class="prettyprint">$('#datepicker').datepicker('update');</pre>
          <pre class="prettyprint">$('#datepicker').datepicker('update', '15-05-1984');</pre>
		  
          <h4>setStartDate</h4>
          <p>Arguments: <ul><li>startDate (string, optional)</li></ul><br> Sets a new lower date limit on the datepicker.</p>          
          <pre class="prettyprint">$('#datepicker').datepicker('setStartDate', '2012-01-01');</pre>
          <p>Omit startDate (or provide an otherwise falsey value) to unset the limit.</p>
          <pre class="prettyprint">$('#datepicker').datepicker('setStartDate');</pre>      
          
          <h4>setEndDate</h4>
          <p>Arguments: <ul><li>endDate (string, optional)</li></ul><br>Sets a new upper date limit on the datepicker.</p>          
          <pre class="prettyprint">$('#datepicker').datepicker('setEndDate', '2012-01-01');</pre>
          <p>Omit endDate (or provide an otherwise falsey value) to unset the limit.</p>
          <pre class="prettyprint">$('#datepicker').datepicker('setEndDate');</pre>                
          
          <h2>Events</h2>
          <p>Datepicker class exposes a few events for manipulating the dates.</p>
          <h4>show</h4>
          <p>This event fires immediately when the date picker is displayed.</p>
          
          <h4>hide</h4>
          <p>This event is fired immediately when the date picker is hidden.</p>
          
          <h4>changeDate</h4>
          <p>This event is fired when the date is changed.</p>
<pre class="prettyprint linenums">
$(&#039;#dp5&#039;).datepicker()
  .on(&#039;changeDate&#039;, function(ev){
    if (ev.date.valueOf() &lt; startDate.valueOf()){
      ....
    }
  });
</pre> 

          <h4>changeYear</h4>
          <p>Fired when the view year is changed from decade view.</p>
          
          <h4>changeMonth</h4>
          <p>Fired when the view month is changed from year view.</p>          
          
          <h2>Keyboard support</h2>          
          <p>The datepicker includes some keyboard navigation:</p>
          <h4>up, down, left, right arrow keys</h4>
          <p>By themselves, left/right will move backward/forward one day, up/down will move back/forward one week. </p>
          <p>With the shift key, up/left will move backward one month, down/right will move forward one month.</p>
          <p>With the ctrl key, up/left will move backward one year, down/right will move forward oone year.      </p>
          <p>Shift+ctrl behaves the same as ctrl -- that is, it does not change both month and year simultaneously, only the year.</p>
          <h4>escape</h4>
          <p>The escape key can be used to hide and re-show the datepicker; this is necessary if the user wants to manually edit the value.</p>          
          <h4>enter</h4>
          <p>When the picker is visible, enter will simply hide it. When the picker is not visible, enter will have normal effects -- submitting the current form, etc.</p>          
          
          <h2>I18N</h2>         
          <p>The plugin supports i18n for the month and weekday names and the
              <code>weekStart</code>
              option. The default is English ('en'); other available translations are avilable in the
              <code>js/locales/</code>
              directory, simply include your desired locale after the plugin. To add more languages, simply add a key to
              <code>$.fn.datepicker.dates</code>
              , before calling
              <code>.datepicker()</code>
              . Example:
          </p>


<pre class="prettyprint linenums">$.fn.datepicker.dates['en'] = {
    days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
    months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
};
</pre>
          
<p>If your browser (or those of your users) is displaying characters wrong, chances are the browser is loading the javascript file with a non-unicode encoding.  Simply add <code>charset="UTF-8"</code> to your <code>script</code> tag:</p>          
<pre class="prettyprint">&lt;script type="text/javascript" src="bootstrap-datepicker.de.js" charset="UTF-8"&gt;&lt;/script&gt;</pre>          

        </div>
      </div>
    </section>

<hr>    
<p>This page is based on original datepicker by Stefan Petre <a href="http://www.eyecon.ro/bootstrap-datepicker" target="_balnk">www.eyecon.ro/bootstrap-datepicker</a> and <a href="https://github.com/eternicode/bootstrap-datepicker" target="_balnk">@eternicode's improvements</a>.</p>
<p>Vitaliy Potapov, 2012</p>

</div>
	<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy',
                todayBtn: 'linked'
			});
            
			$('#dp2').datepicker();
            $('#btn2').click(function(e){
                e.stopPropagation();
                $('#dp2').datepicker('update', '03/17/12');
            });             
            
			$('#dp3').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});
                
            //inline    
            $('#dp6').datepicker({
                todayBtn: 'linked'
            });
                
            $('#btn6').click(function(){
                $('#dp6').datepicker('update', '15-05-1984');
            });            
            
            $('#btn7').click(function(){
                $('#dp6').data('datepicker').date = null;
                $('#dp6').find('.active').removeClass('active');                
            });            
		});
	</script>
  </body>
</html>
