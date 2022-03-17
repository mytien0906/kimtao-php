
<div class="container_face">
   <div class="timeservice">
      <div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="event" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>       
    </div>
</div>


<style>
   .fanpage.open {
       width: 245px;
   }
   .fanpage {
       position: fixed;
       top: 220px;
       right: 0;
       transition: 0.6s;
       z-index: 10;
       transition: all 0.5s;
       -webkit-transition: all 0.5s;
       -moz-transition: all 0.5s;
       width: 45px;
       overflow: hidden;
         min-height: 45px;
   }
   .fanpage2 {
      margin-left: 45px;
      width: 200px;
      background: #fff;
      float: left;
      transition: all 0.5s;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      font-weight: bold;
      font-size: 25px;
      box-sizing: border-box;
      text-align: center;
      color: #f00;
      padding: 5px;
   }
   .fanpage .title {
       margin: 0;
       padding: 0;
       position: absolute;
       top: 0;
       left: 0;
       cursor: pointer;
   }
   .fanpage2 a{
      text-decoration: none;color: #f00;
   }
   .w-clear {
       position: relative;
   }
   .title {
       padding: 0px 0px 0px 0;
       margin: 0px 0px 20px 0px; 
       background: url(../img/tt-bg.png) repeat-x bottom right;
       font-size: 16px;
       position: relative;
       font-family: osb;
   }
   .container_face {
      position:fixed;
      bottom:0;
      right:-300px;
      width:350px;
      min-height:240px;
      z-index:10;
      padding-left:50px;
      background: url(images/button_facebook.png) no-repeat left 10px;
      cursor:pointer;
   }

   .container_face .timeservice {
      background:#FFFFFF;
      min-height: 240px;
      padding: 10px;
   }
</style>

<script type="text/javascript">
    jQuery(document).ready(function() {
       jQuery(".container_face").hover(function() {
          jQuery(this).stop().animate({right: "0"}, "medium");
   }, function() {
      jQuery(this).stop().animate({right: "-300"}, "medium");}, 500);
   });
</script> 
   
<script type="text/javascript">
    $(document).ready(function() { 
        $(".fanpage .title").click(function(){
            if($(".fanpage ").hasClass('open')){
                $(".fanpage ").removeClass('open');
            }else{
                $(".fanpage ").addClass('open');
            }
        });
    })
</script>