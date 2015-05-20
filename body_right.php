<!--右侧-->
<div id="body_right">
     <h3><?php echo $highlights?></h3>
        <?php include_once("show_highlights.php");?>
        <p class="more">
            <a href="highlights_list.php">More Hightlights</a>
        </p>
        <h3><?php echo $news?></h3>
        <?php include_once("show_news2.php");?>
        <p class="more">
            <a href="news_list.php">More Details</a>
        </p>
                
        <h3><?php echo $pubs?></h3>
        <p class="text">
            <?php include_once("show_affiches2.php");?>
        </p>
                
        <p class="more">
            <a href="publications_list.php">More Publications</a>
        </p>
                
        <h3><?php echo $contact?></h3>
        <p class="text"></p>
        <p class="more">
            <a href="#">Contact Details</a>
        </p>
    </div> 
</div>