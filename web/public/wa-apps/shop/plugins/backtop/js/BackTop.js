 $(document).ready(function(){
        // if body don't have id
        var idBody = $('body').attr('id');
        
        if(  typeof idBody == 'undefined'){
            
            $('body').attr('id','scrollBackTop');
            
        }
        else{
            
            var idbody = $('body').attr('id');
            $("#BackTop a").attr('href','#'+idbody);
        }
        
       	// hide #BackTop first
        
       	$("#BackTop").hide();
        	
        // fade in #BackTop
        
            	$(function () {
            		$(window).scroll(function () {
            			if ($(this).scrollTop() > 100) {
            				$('#BackTop').fadeIn();
            			} else {
            				$('#BackTop').fadeOut();
            			}
            		});
            
          // scroll body to 0px on click
          
            		$('#BackTop a').click(function () {
            			$('body,html').animate({
            				scrollTop: 0
            			}, 800);
            			return false;
            		});
            	});  
        
        // set the css variable
        $("#BackTop").attr('style','background: '+$.backtopSet.bg+';background: -moz-linear-gradient(top, '+$.backtopSet.bg+' 0%, '+$.backtopSet.bg2+' 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,'+$.backtopSet.bg+'), color-stop(100%,'+$.backtopSet.bg2+')); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, '+$.backtopSet.bg+' 0%,'+$.backtopSet.bg2+' 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, '+$.backtopSet.bg+' 0%,'+$.backtopSet.bg2+' 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, '+$.backtopSet.bg+' 0%,'+$.backtopSet.bg2+' 100%); /* IE10+ */background: linear-gradient(to bottom, '+$.backtopSet.bg+' 0%,'+$.backtopSet.bg2+' 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="'+$.backtopSet.bg+'", endColorstr="'+$.backtopSet.bg2+'",GradientType=0 ); /* IE6-8 */');
        $("#BackTop").css('border-color',$.backtopSet.border_color).css('width',$.backtopSet.button_width+'px').css('height',$.backtopSet.button_height+'px').css('border-width',$.backtopSet.border_size+'px');
        $("#BackTop").css('-moz-border-radius',$.backtopSet.border_radius+'px').css('-webkit-border-radius',$.backtopSet.border_radius+'px').css('-khtml-border-radius',$.backtopSet.border_radius+'px').css('border-radius',$.backtopSet.border_radius+'px'); 
      
        
        if( $.backtopSet.position_ver == 't'){
            $("#BackTop").css('top',$.backtopSet.pos_ver+'px').css('bottom','auto');
        }
        else if($.backtopSet.position_ver == 'b'){
            $("#BackTop").css('bottom',$.backtopSet.pos_ver+'px').css('top','auto');
        }
        
        if( $.backtopSet.position_hor == 'r'){
            $("#BackTop").css('right',$.backtopSet.pos_hor+'px').css('left','auto');
        }
        else if($.backtopSet.position_hor == 'l'){
            $("#BackTop").css('left',$.backtopSet.pos_hor+'px').css('right','auto');
        }
        
        $("#BackTop .BackTopText").html($.backtopSet.text).css('color',$.backtopSet.link_color).css('line-height',$.backtopSet.button_height+'px').css('font-size',$.backtopSet.text_size+'px');
        
        
        if( $("#BackTop .BackTopText").html() == "" ){
        $("#BackTop .BackTopText").html('&#9650;');
        }
        
        
        $("#BackTop .BackTopText").mouseenter(function(){
            
            $(this).css('color',$.backtopSet.link_hover);
        }).mouseleave(function(){ 
            $(this).css('color',$.backtopSet.link_color);
            });
        
            
        $("#BackTop").css('opacity',$.backtopSet.opacity).css('-moz-opacity',$.backtopSet.opacity).css('-khtml-opacity',$.backtopSet.opacity);
        
        $("#BackTop").mouseenter(function(){ 
            $(this).css('opacity','1').css('-moz-opacity','1').css('-khtml-opacity','1');
        }).mouseleave(function(){ 
            $(this).css('opacity',$.backtopSet.opacity).css('-moz-opacity',$.backtopSet.opacity).css('-khtml-opacity',$.backtopSet.opacity);
        });
        
        //
        
        
        
       
   }); 