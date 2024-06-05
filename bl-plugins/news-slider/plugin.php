<?php
    class newssliders extends Plugin {

        
	public function init()
	{
		$this->dbFields = array(
			'howmuch'=>'',
			'category'=>'',
            'howlong'=>30,
            'style'=>'darkleft',
            'bgdark'=>'50%',
            'btntext'=>'read more...',
            'btncolor'=>'',
            'btntextcolor'=>'',
            'height'=>'600px',
            'heightmobile'=>'600px',
            'speed'=>'3000',
            'borderradius'=>''
		);

        $this->customHooks = array(
            'newsSlider'
        );
    } 

    
        public function form() {
            
          global $categories;
          global $site;

            
            $html = '

<div class="col-md-12 bg-light border p-3">

<h4>how to use this plugin?</h4>
<p>
paste the code below where you want to use the slider in the template
</p>

<code> &#60;?php Theme::plugins("newsSlider");?&#62;</code>
</div>

<br>

<p>Set carousel speed in milliseconds (default 3000)</p>
<input type="text" value="'.$this->getValue('speed').'" name="speed">
<br>

            <p class="my-2">What categories of posts to display?</p>
            <select name="category">
<option value="all" '.($this->getValue('category') == 'all' ? 'selected' :'').'>All posts</option>
            ';

            foreach ($categories->keys() as $key) {
                $category = new Category($key);
            $html .= '<option value="'.$category->name().'" '.($this->getValue('category') == $category->name() ? 'selected' :'').'  >'.$category->name().'</option>';
            };

            $html .='</select>';

            $html .= '
            <br>
            <p class="my-2">How many posts are displayed?</p>

            <select name="howmuch">
            <option value="1" '.($this->getValue('howmuch') == 1 ? 'selected':"").'>1</option>
            <option value="2" '.($this->getValue('howmuch') == 2 ? 'selected':"").'>2</option>
            <option value="3" '.($this->getValue('howmuch') == 3 ? 'selected':"").'>3</option>
            <option value="4" '.($this->getValue('howmuch') == 4 ? 'selected':"").'>4</option>
            <option value="5" '.($this->getValue('howmuch') == 5 ? 'selected':"").'>5</option>
            <option value="6" '.($this->getValue('howmuch') == 6 ? 'selected':"").'>6</option>
            <option value="7" '.($this->getValue('howmuch') == 7 ? 'selected':"").'>7</option>
            <option value="8" '.($this->getValue('howmuch') == 8 ? 'selected':"").'>8</option>
             
            </select>';


            $html .= '
            <br>
            <p>What style slide you prefer?</p>
            <select name="style">
            <option value="lightleft" '.($this->getValue('style')=='lightleft'? 'selected':'').'>light left content</option>
            <option value="lightright" '.($this->getValue('style')=='lightright'? 'selected':'').'>light right content</option>
            <option value="lightfull" '.($this->getValue('style')=='lightfull'? 'selected':'').'>light full content</option>
            <option value="darkleft" '.($this->getValue('style')=='darkleft'? 'selected':'').'>dark left content</option>
            <option value="darkright"'.($this->getValue('style')=='darkright'? 'selected':'').' >dark right content</option>
            <option value="darkfull" '.($this->getValue('style')=='darkfull'? 'selected':'').'>dark full content</option>
            </select>
            
            ';


            $html .='
            <br>
<p>How many words of content should the slider contain?</p>
<input type="text" name="howlong" value="'.$this->getValue('howlong').'">
            ';

$html .='

<br>
<p>How much to darken the slider photo (example 50%) 100% is picture without dark</p>
<input type="text" name="bgdark" value="'.$this->getValue('bgdark').'">
';

$html .='

<br>
<p>Height slider example (600px)</p>
<input type="text" name="height" value="'.$this->getValue('height').'">


<br>
<p>Height slider mobile (600px)</p>
<input type="text" name="heightmobile" value="'.$this->getValue('heightmobile').'">


<br>
<p>Border radius arrow (example 5px)</p>
<input type="text" name="borderradius" value="'.$this->getValue('borderradius').'">



';


$html .='
<div class="col-md-12 border bg-light my-4 p-3">

<br>
<p>Button text</p>
<input type="text" name="btntext" class="form-control" value="'.$this->getValue('btntext').'">



<br>
<p>Button color</p>
<input type="color" name="btncolor" class="form-control" value="'.$this->getValue('btncolor').'">
<br>
<p>Button text color</p>
<input type="color" name="btntextcolor" class="form-control" value="'.$this->getValue('btntextcolor').'">


</div>
';

    $html .= '




 
<div class="bg-light col-md-12 my-3 py-3 d-block text-center border">
      
<p class="lead">buy me ☕ if you want saw new plugins:)  </p>

<a href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"  />
</a>

</div> ';



            return $html;

        }


        public function newsSlider()
        {
            global $pages;
          include($this->phpPath().'php/newsSlider.php');
        }
    
    }
?>