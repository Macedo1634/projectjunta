<?php
if(!empty($_POST["id"])){

    // Include the database configuration file
    include 'dbConfig.php';
    
    // Count all records except already displayed
    $query = $db->query("SELECT COUNT(*) as num_rows FROM noticias WHERE id < ".$_POST['id']." ORDER BY id DESC");
    $row = $query->fetch_assoc();
    $totalRowCount = $row['num_rows'];
    
    $showLimit = 5;
    
    // Get records from the database
    $query = $db->query("SELECT * FROM noticias WHERE id < ".$_POST['id']." ORDER BY id DESC LIMIT $showLimit");

    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){
            $postID = $row['id'];
    ?>
                                <div class="single-news one-item"> 
                                    <article>
                                        <img src="noticias/noticias-img/<?php echo $row['imagem']; ?>" alt="">
                                        <div class="content">
                                            <h3><?php echo $row['titulo']; ?></h3>
                                            <p><?php echo $row['texto']; ?></p>
                                            <span class="date"><?php echo $row['data']; ?></span>
                                        </div>
                                        <a href="noticia.php?id=<?php echo $row['id']; ?>" class="link"></a>

                                    </article>
                                </div>
    <?php } ?>
    <?php if($totalRowCount > $showLimit){ ?>
        <div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
            <span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more</span>
            <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
        </div>
    <?php } ?>
<?php
    }
}
?>