<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'Anael Books');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>

        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('screen');
        ?>
        <!--[if IE]>
        <?php
        echo $this->Html->css('pro_dropline_ie')
        ?>
        <![endif]-->
        <?php
        echo $this->Html->css('demo_page');
        echo $this->Html->css('demo_table_jui');
        echo $this->Html->css('jquery-ui-1.8.4.custom');
        echo $this->Html->script('jquery');
        echo $this->Html->script('jquery.validationEngine-fr');
        echo $this->Html->script('jquery.validationEngine');
        echo $this->Html->script('jquery.dataTables');
        
        echo $this->Html->script('jquery/ui.core');
        echo $this->Html->script('jquery/ui.checkbox');
        echo $this->Html->script('jquery/jquery.bind');
        ?>
        <script type="text/javascript">
            $(function(){
                $('input').checkBox();
                $('#toggle-all').click(function(){
                    $('#toggle-all').toggleClass('toggle-checked');
                    $('#mainform input[type=checkbox]').checkBox('toggle');
                    return false;
                });
            });


        </script>  


        <![if !IE 7]>
        <!--  styled select box script version 1 -->
        <?php
        echo $this->Html->script('jquery/jquery.selectbox-0.5');
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.styledselect').selectbox({ inputClass: "selectbox_styled" });
            });
        </script>


        <![endif]>


        <!--  styled select box script version 2 --> 
        <?php
        echo $this->Html->script('jquery/jquery.selectbox-0.5_style_2');
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
                $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
            });
            
            
        </script>

        <!--  styled select box script version 3 -->
        <?php
        echo $this->Html->script('jquery/jquery.selectbox-0.5_style_2');
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
            });
        </script>

        <!--  styled file upload script --> 
        <?php
        echo $this->Html->script('jquery/jquery.filestyle');
        ?>
        <script type="text/javascript" charset="utf-8">
            $(function() {
                $("input.file_1").filestyle({ 
                    image: "img/forms/upload_file.gif",
                    imageheight : 29,
                    imagewidth : 78,
                    width : 300
                });
            });
        </script>

        <!-- Custom jquery scripts -->
        <?php
        echo $this->Html->script('jquery/custom_jquery');
        echo $this->Html->script('jquery/jquery.tooltip');
        echo $this->Html->script('jquery/jquery.dimensions');
        ?>
        <script type="text/javascript">
            $(function() {
                $('a.info-tooltip ').tooltip({
                    track: true,
                    delay: 0,
                    fixPNG: true, 
                    showURL: false,
                    showBody: " - ",
                    top: -35,
                    left: 5
                });
            });
        </script> 

        <!--  date picker script -->
        <?php
        echo $this->Html->css('datePicker');
        echo $this->Html->script('jquery/date');
        echo $this->Html->script('jquery/jquery.datePicker');
        ?>
        <script type="text/javascript" charset="utf-8">
            $(function()
            {

                // initialise the "Select date" link
                $('#date-pick')
                .datePicker(
                // associate the link with a date picker
                {
                    createButton:false,
                    startDate:'01/01/2005',
                    endDate:'31/12/2020'
                }
            ).bind(
                // when the link is clicked display the date picker
                'click',
                function()
                {
                    updateSelects($(this).dpGetSelected()[0]);
                    $(this).dpDisplay();
                    return false;
                }
            ).bind(
                // when a date is selected update the SELECTs
                'dateSelected',
                function(e, selectedDate, $td, state)
                {
                    updateSelects(selectedDate);
                }
            ).bind(
                'dpClosed',
                function(e, selected)
                {
                    updateSelects(selected[0]);
                }
            );
	
                var updateSelects = function (selectedDate)
                {
                    var selectedDate = new Date(selectedDate);
                    $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
                    $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
                    $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
                }
                // listen for when the selects are changed and update the picker
                $('#d, #m, #y')
                .bind(
                'change',
                function()
                {
                    var d = new Date(
                    $('#y').val(),
                    $('#m').val()-1,
                    $('#d').val()
                );
                    $('#date-pick').dpSetSelected(d.asString());
                }
            );

                // default the position of the selects to today
                var today = new Date();
                updateSelects(today.getTime());

                // and update the datePicker to reflect it...
                $('#d').trigger('change');
            });
        </script>

        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <?php
        echo $this->Html->script('jquery/jquery.pngFix.pack');
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).pngFix( );
            });
        </script>

        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body> 
        <!-- Start: page-top-outer -->
        <div id="page-top-outer">    

            <!-- Start: page-top -->
            <div id="page-top">

                <!-- start logo -->
                <div id="logo">
<!--                    <a href=""><img src="img/shared/logo1.png" width="110" height="40" alt="" /></a>-->
                    
                    <?php echo $this->Html->image('shared/logo1.png',array('width'=>'110','height'=>'40')); ?> 
                </div>
                <!-- end logo -->

                <!--  start top-search -->
<?php // echo $this->element('recherche') ; ?>
                <!--  end top-search -->
                <div class="clear"></div>

            </div>
            <!-- End: page-top -->

        </div>
        <!-- End: page-top-outer -->

        <div class="clear">&nbsp;</div>

        <!--  start nav-outer-repeat................................................................................................. START -->
<?php
echo $this->element("menu");
?><!--  start nav-outer-repeat................................................... END -->

        <div class="clear"></div>

        <!-- start content-outer -->
        <div id="content-outer">
            <!-- start content -->
            <div id="content">
<?php // echo $this->element('form');?>
               <?php  echo $this->fetch('content'); ?> 
             
            </div>
            <!--  end content -->
            <div class="clear">&nbsp;</div>
        </div>
        <!--  end content-outer -->
        <div class="clear">&nbsp;</div>

        <!-- start footer -->         
<?php echo $this->element('footer'); ?>
        <!-- end footer -->

    </body>
</html>