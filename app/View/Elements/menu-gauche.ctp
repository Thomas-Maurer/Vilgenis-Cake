<!--Début Menu gauche-->
	<div class="row"> 
        <div class="leftMenu">
            <div class="col-xs-4 col-md-2 col-lg-2 ">  
                <ul class=" panel nav nav-pills nav-stacked gradient leftmenuFontColor">  
                    <?php foreach($rubriques_parents as $rubrique)
						 echo '<li><a href="#">',$rubrique['rubrique']['NOM_RUBRIQUE'], '</a></li>  '
					?>
                </ul>  
            </div>  
        </div>
    
 <!--Fin Menu gauche-->
 
