<!--右侧-->
<div id="body_right">
     <h3><?php echo $highlights?></h3>
        <?php include_once("show_highlights.php");?>
        <p class="more">
            <a href="highlights"><?php echo $more_high?></a>
        </p>
        <h3><?php echo $news?></h3>
        <?php include_once("show_news2.php");?>
        <p class="more">
            <a href="news"><?php echo $more_news?></a>
        </p>
                
        <h3><?php echo $pubs?></h3>
        <p class="text">
            <?php include_once("show_affiches2.php");?>
        </p>
                
        <p class="more">
            <a href="publications"><?php echo $more_pub?></a>
        </p>
                
        <h3><?php echo $contact?></h3>
        <p class="text"></p>
        <p class="more">
            <a href="contact"><?php echo $more_contact?></a>
        </p>
    </div> 
</div>