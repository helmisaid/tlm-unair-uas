
<?php 

$newLoop = array();

forEach($pages->db as $key=>$pagx){
if($pagx['category']!=='' && $pagx['type']=='published'){

if($pagx['category']==strtolower($this->getValue('category'))){
     $newLoop[$key]= $pagx;
}

if($this->getValue('category')=='all' && $pagx['type']=='published'){
      $newLoop[$key]= $pagx;   
};
};
};

if($this->getValue('howmuch')!==''){
$newLoop = array_slice($newLoop,0,$this->getValue('howmuch'));
}; 
?>

<link rel="stylesheet" href="<?php echo $this->domainPath() . 'css/'.$this->getValue('style');?>.css">

<style>

    .swipe-content-bg{filter:brightness(<?php echo $this->getValue('bgdark');?>);}

    .swipe-btn,.swipe-btn:hover{
        background:<?php echo $this->getValue('btncolor');?>;;
        color:<?php echo $this->getValue('btntextcolor');?>;
    }

    .swipe-item{
   
   <?php if($this->getValue('height')!==''):?>

     height:<?php echo $this->getValue('height');?>

   <?php endif ?>


    }

    @media(max-width:768px){

  <?php if($this->getValue('heightmobile')!==''):?>

 .swipe-item{
        height:<?php echo $this->getValue('heightmobile');?>
    }

<?php endif ?>


    }


    <?php if($this->getValue('borderradius')!==null):?>


    .swipeleft{
    border-top-right-radius:<?php echo $this->getValue('borderradius');?>;
    border-bottom-right-radius:<?php echo $this->getValue('borderradius');?>;
}

.swiperight{
    border-top-left-radius:<?php echo $this->getValue('borderradius');?>;
    border-bottom-left-radius:<?php echo $this->getValue('borderradius');?>;
}

<?php endif ?>

</style>


<div id="slidercontainer">

<button class="swipeleft"><img src="<?php echo $this->domainPath().'/img/arrowleft.svg';?>"></button>
<button class="swiperight"><img src="<?php echo $this->domainPath().'/img/arrowright.svg';?>"></button>

<div id="newsSlider" class="swipe">

    <div class="swipe-wrap">

        <?php foreach ($newLoop as $key=>$page) : ?>

<?php

$description = explode(' ',$page['description']);
$smallDescription = array_slice($description,0,$this->getValue('howlong'));
$newDescription = implode(' ',$smallDescription);

;?>

            <div class="swipe-item">

                <img src="<?php echo DOMAIN_UPLOADS_PAGES.DS.$page['uuid'].DS.$page['coverImage'];?>" 
                class="swipe-content-bg" alt="
<?php echo $page['title'];?>
            ">
                <div class="swipe-content fadeInMe">
                    <div>
                        <h2><?php echo $page['title'];?></h2>
                        <p><?php echo  $newDescription;?> [...]</p>
                        <a href="<?php echo DOMAIN.DS.$key;?>" class="swipe-btn"><?php echo $this->getValue('btntext');?></a>
                    </div>

                </div>
            </div>

        <?php endforeach ?>

    </div>
</div>
</div>
<div>

<script src="<?php echo $this->domainPath() . 'js/swipe.min.js'; ?>"></script>

<script>
    var element = document.getElementById('newsSlider');
    window.mySwipe = new Swipe(element, {
        startSlide: 0,
        auto: <?php echo $this->getValue('speed') ? $this->getValue('speed') : 3000 ;?>,
        draggable: true,
        autoRestart: false,
        continuous: true,
        disableScroll: true,
        stopPropagation: true,
        callback: function(index, element) {
     document.querySelectorAll('.swipe-content').forEach(c=>{c.style.display="none";c.classList.remove('fadeInMe')});
    document.querySelectorAll('.swipe-content')[index].style.display="flex";
    document.querySelectorAll('.swipe-content')[index].classList.add('fadeInMe');
        },
        transitionEnd: function(index, element) {}

    });

         prevBtn = document.querySelector('.swipeleft');
          nextBtn = document.querySelector('.swiperight');
      nextBtn.onclick = mySwipe.next;
     prevBtn.onclick =  mySwipe.prev;
</script>