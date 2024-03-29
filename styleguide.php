
<h1>Metabox.io Setup</h1>


<h2>Checkbox</h2>
<div class="rwmb-field rwmb-checkbox-wrapper dp--checkbox">
    <div class="rwmb-label">
        <label for="SCORG_script_type">Script in Header or Footer?</label>

    </div>
    <div class="rwmb-input">
        <ul class="rwmb-input-list rwmb-collapse">
            <li><label><input value="header" type="checkbox" size="30" class="rwmb-checkbox" name="SCORG_script_type" checked="checked">Header</label></li>
            <li><label><input value="footer" type="checkbox" size="30" class="rwmb-checkbox" name="SCORG_script_type">Footer</label></li>
        </ul>
    </div>
</div>

<br>


<h2>Radio</h2>
<div class="rwmb-field rwmb-radio-wrapper dp--radio">
    <div class="rwmb-label">
        <label for="SCORG_script_type">Script in Header or Footer?</label>

    </div>
    <div class="rwmb-input">
        <ul class="rwmb-input-list rwmb-collapse">
            <li><label><input value="header" type="radio" size="30" class="rwmb-radio" name="SCORG_script_type" checked="checked">Header</label></li>
            <li><label><input value="footer" type="radio" size="30" class="rwmb-radio" name="SCORG_script_type">Footer</label></li>
        </ul>
    </div>
</div>


<br>

<h2>Switch</h2>

<div class="rwmb-field rwmb-switch-wrapper dp--switch">
    <div class="rwmb-label">
        <label for="SCORG_enable_script">.dp--switch</label>
    </div>
    <div class="rwmb-input">
        <label class="rwmb-switch-label rwmb-switch-label--rounded">
            <input value="1" type="checkbox" size="30" id="SCORG_enable_script" class="rwmb-switch" name="SCORG_enable_script" checked="checked">
            <div class="rwmb-switch-status">
                <span class="rwmb-switch-slider"></span>
                <span class="rwmb-switch-on">On</span>
                <span class="rwmb-switch-off"></span>
            </div>
        </label>
    </div>
</div>

<br>
<div class="rwmb-field rwmb-switch-wrapper dp--switch dp--switch-small">
    <div class="rwmb-label">
        <label for="SCORG_enable_script">.dp--switch .dp--switch-small</label>
    </div>
    <div class="rwmb-input">
        <label class="rwmb-switch-label rwmb-switch-label--rounded">
            <input value="1" type="checkbox" size="30" id="SCORG_enable_script" class="rwmb-switch" name="SCORG_enable_script" checked="checked">
            <div class="rwmb-switch-status">
                <span class="rwmb-switch-slider"></span>
                <span class="rwmb-switch-on">On</span>
                <span class="rwmb-switch-off"></span>
            </div>
        </label>
    </div>
</div>
<br>

<br>


<h2>Textarea</h2>
<div class="rwmb-field rwmb-textarea-wrapper dp--textarea">
    <div class="rwmb-label">
        <label for="SCORG_script_description">Description</label>

    </div>
    <div class="rwmb-input"><textarea cols="10" rows="3" id="SCORG_script_description" class="rwmb-textarea large-text" name="SCORG_script_description" spellcheck="false"></textarea></div>
</div>



<h2>Date</h2>
<div class="rwmb-field rwmb-date-wrapper dp--date" style="">
    <div class="rwmb-label">
        <label for="SCORG_specific_date">Date</label>

    </div>
    <div class="rwmb-input"><input data-options="{&quot;timeFormat&quot;:&quot;HH:mm&quot;,&quot;separator&quot;:&quot; &quot;,&quot;dateFormat&quot;:&quot;yy-mm-dd&quot;,&quot;showButtonPanel&quot;:false}" size="30" type="text" id="SCORG_specific_date" class="rwmb-date hasDatepicker valid"
            name="SCORG_specific_date" aria-invalid="false"></div>
</div>


<h2>Time</h2>

<div class="rwmb-field rwmb-time-wrapper dp--time" style="">
    <div class="rwmb-label">
        <label for="SCORG_specific_time_start">Start at Specific Time</label>

    </div>
    <div class="rwmb-input"><input data-options="{&quot;timeFormat&quot;:&quot;HH:mm&quot;,&quot;separator&quot;:&quot; &quot;,&quot;dateFormat&quot;:&quot;yy-mm-dd&quot;,&quot;showButtonPanel&quot;:true,&quot;stepMinute&quot;:15,&quot;controlType&quot;:&quot;select&quot;,&quot;oneLine&quot;:true}"
            size="30" type="text" id="SCORG_specific_time_start" class="rwmb-time hasDatepicker" name="SCORG_specific_time_start"></div>
</div>

<!-- <form action="#">

	<h2>DropDowns</h2>

	<label for="cars">Choose a car:</label>
	<select id="cars" name="cars">

		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="fiat">Fiat</option>
		<option value="audi">Audi</option>

	</select>

</form> -->


<!-- <form action="#">

	<h2>Input</h2>

	<label for="fname">First name:</label><br>
  	<input type="text" id="fname" name="fname"><br><br>

</form>
 -->
<!-- <form action="#">

	<h2>Input with upload</h2>

	<label for="fname">First name:</label><br>
  	<input type="text" id="fname" name="fname"><br><br>

</form>
 -->



<form action="#">

	<h2>Inputs</h2>
		
	<label class="dp--input">
		<input type="text" placeholder="something" />
	</label>
	
	<label class="dp--input-file">
		<input type="file" placeholder="something" />
	</label>

	<label class="dp--select">
		<select name="something">
			<option value="one">Option 1</option>
			<option value="two">Option 2</option>
			<option value="three">Option 3</option>
		</select>
	</label>

</form>

<br><br><br>

<form action="#">

	<input class="dp-btn" type="submit" value="Submit">
	<input class="dp-btn dp-btn--pri" type="submit" value="Submit">
	<input class="dp-btn dp-btn--sec" type="submit" value="Submit">

</form>

<br><br><br>

