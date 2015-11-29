<article class="article1">
 
<?=$content?>
<img src="<?=$this->url->asset("img/readonly.png")?>" alt="monster"> 
<?php if(isset($byline)) : ?>
<footer class="byline">
<?=$byline?>
</footer>
<?php endif; ?>
 
</article>

